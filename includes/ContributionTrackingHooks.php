<?php

class ContributionTrackingHooks {

	public static function onLoadExtensionSchemaUpdates( DatabaseUpdater $updater ) {
		global $wgContributionTrackingDBname;

		$dir = dirname( __DIR__ ) . '/';

		if (
			$updater->getDB()->getDBname() === $wgContributionTrackingDBname ||
			$wgContributionTrackingDBname === null
		) {
			$updater->addExtensionTable( 'contribution_tracking',
				$dir . 'ContributionTracking.sql' );
			$updater->addExtensionTable( 'contribution_tracking_owa_ref',
				$dir . 'ContributionTracking_OWA_ref.sql' );
			$updater->addExtensionUpdate( [ 'addField', 'contribution_tracking',
				'owa_session', $dir . 'patches/patch-owa.sql', true ] );
			$updater->addExtensionUpdate( [ 'addField', 'contribution_tracking', 'utm_key',
				$dir . 'patches/patch-owa.sql', true ] );

			if ( $updater->getDB()->getType() !== 'sqlite' ) {
				// Not sure how to do this in the other configurations, but I guess
				// "manually" might be the answer.
				$updater->addExtensionUpdate( [ 'modifyField', 'contribution_tracking',
					'anonymous', $dir . 'patches/make-null.patch.sql', true ] );
			}
			if ( $updater->getDB()->getType() !== 'postgres' ) {
				$updater->addExtensionUpdate( [ 'addTable', 'contribution_tracking',
					$dir . 'ContributionTracking.pg.sql', true ] );
			}
		} else {
			// We are configured not to use the main mediawiki db.
			// Unless the updater is modified not to run
			// 'LoadExtensionSchemaUpdates' hooks in its constructor (or do so
			// conditionally), we're going to have to do these manually.
			$ctDB = ContributionTrackingProcessor::contributionTrackingConnection();
			'@phan-var \Wikimedia\Rdbms\IMaintainableDatabase $ctDB';
			if ( !$ctDB->tableExists( 'contribution_tracking' ) ) {
				$ctDB->sourceFile( $dir . 'ContributionTracking.sql' );
			}
			if ( !$ctDB->tableExists( 'contribution_tracking_owa_ref' ) ) {
				$ctDB->sourceFile( $dir . 'ContributionTracking_OWA_ref.sql' );
			}
			if ( !$ctDB->fieldExists( 'contribution_tracking', 'owa_session' ) ) {
				$ctDB->sourceFile( $dir . 'patches/patch-owa.sql' );
			}
			if ( !$ctDB->fieldExists( 'contribution_tracking', 'utm_key' ) ) {
				$ctDB->sourceFile( $dir . 'patches/patch-utm_key.sql' );
			}
			if ( !$ctDB->fieldExists( 'contribution_tracking', 'country' ) ) {
				$ctDB->sourceFile( $dir . 'patches/20120924.new_columns.sql' );
			}
		}
		return true;
	}
}
