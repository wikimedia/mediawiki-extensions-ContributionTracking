<?php

class ContributionTracking extends UnlistedSpecialPage {
	public $lang;

	function __construct() {
		parent::__construct( 'ContributionTracking' );
	}

	function execute( $language ) {
		$request = $this->getRequest();

		$gateway = $request->getText( 'gateway' );
		if ( !in_array( $gateway, array( 'paypal', 'moneybookers' ) ) ) {
			$this->getOutput()->showErrorPage( 'contrib-tracking-error', 'contrib-tracking-error-text' );
			return;
		}

		if ( !preg_match( '/^[a-z-]+$/', $language ) ) {
			$language = 'en';
		}

		$this->lang = Language::factory( $language );
		$this->setHeaders();

		$out = $this->getOutput();
		$out->setPageTitle('');

		// Store the contribution data
		if ( $request->getVal( 'contribution_tracking_id' ) ) {
			$contribution_tracking_id = $request->getVal( 'contribution_tracking_id', 0 );
		} else {
			$tracked_contribution = array(
				'form_amount' => $request->getVal('currency_code') . ' ' . $request->getVal('amount'),
				'note' => $request->getVal( 'comment' ),
				'referrer' => $request->getVal( 'referrer' ),
				'utm_source' => $request->getVal( 'utm_source' ),
				'utm_medium' => $request->getVal( 'utm_medium' ),
				'utm_campaign' => $request->getVal( 'utm_campaign' ),
				'utm_key' => $request->getVal( 'utm_key' ),
				'language' => $request->getVal( 'language' ),
				'country' => $request->getVal( 'country' ),
				'owa_session' => $request->getVal( 'owa_session' ),
				'owa_ref' => $request->getVal( 'owa_ref', null ),
				//'ts' => $ts,
			);
			$contribution_tracking_id = ContributionTrackingProcessor::saveNewContribution( $tracked_contribution );
		}

		$params = array(
			'gateway' => $gateway,
			'tshirt' => $request->getVal( 'tshirt' ),
			'return' => $request->getText( 'returnto', "Donate-thanks/$language" ),
			'currency_code' => $request->getText( 'currency_code', 'USD' ),
			'fname' => $request->getText( 'fname', null ),
			'lname' => $request->getText( 'lname', null ),
			'email' => $request->getText( 'email', null ),
			'address1' => $request->getText( 'address1', null ),
			'city' => $request->getText( 'city', null ),
			'state' => $request->getText( 'state', null ),
			'zip' => $request->getText( 'zip', null ),
			'country' => $request->getText( 'country', null ),
			'address_override' => $request->getText( 'address_override', '0' ),
			'recurring_paypal' => $request->getText( 'recurring_paypal' ),
			'amount' => $request->getVal( 'amount' ),
			'amount_given' => $request->getVal( 'amountGiven' ),
			'contribution_tracking_id' => $contribution_tracking_id,
			'language' => $language,
		);

		if ( $params['tshirt'] ) {
			$params['size'] = $request->getText( 'size' );
			$params['premium_language'] = $request->getText( 'premium_language' );
		}

		foreach ( $params as $key => $value ) {
			if ( $value === "" || $value === null ) {
				unset( $params[$key] );
			}
		}

		$repost = ContributionTrackingProcessor::getRepostFields( $params );

		$out->addHTML( $this->ct_msgWiki( 'contrib-tracking-submitting' ) );

		// Output the repost form
		$output = '<form method="post" name="contributiontracking" action="' . $repost['action'] . '">';

		foreach ( $repost['fields'] as $key => $value ) {
			$output .= '<input type="hidden" name="' . htmlspecialchars( $key ) . '" value="' . htmlspecialchars( $value ) . '" />';
		}

		$output .= $this->ct_msgWiki( 'contrib-tracking-redirect' );

		// Offer a button to post the form if the user has no Javascript support
		$output .= '<noscript>';
		$output .= $this->ct_msgWiki( 'contrib-tracking-continue' );
		$output .= '<input type="submit" value="' . $this->ct_msg( 'contrib-tracking-button' ) . '" />';
		$output .= '</noscript>';

		$output .= '</form>';

		$out->addHTML( $output );

		// Automatically post the form if the user has JavaScript support
		$out->addHTML( '<script type="text/javascript">document.contributiontracking.submit();</script>' );
	}

	function ct_msg() {
		return $this->msg( func_get_arg( 0 ) )->inLanguage( $this->lang )->escaped();
	}

	function ct_msgWiki( $key ) {
		return $this->msg( $key )->inLanguage( $this->lang )->parseAsBlock();
	}
}
