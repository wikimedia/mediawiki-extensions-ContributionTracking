<?php
/**
 * Centralized class used by both the old interstitial page, and the API to
 * process transactions and send donors off to the correct gateway location.
 * @author Katie Horn <khorn@wikimedia.org>
 */
class ContributionTrackingProcessor {
	/**
	 * If a database connection has already been established, it returns that
	 * connection. Otherwise, it establishes one, and returns that.
	 * @global string $wgContributionTrackingDBserver : DB Server name, defined
	 * in ContributionTracking.php
	 * @global string $wgContributionTrackingDBname : Database name, defined in
	 * ContributionTracking.php
	 * @global string $wgContributionTrackingDBuser : Database user, defined in
	 * ContributionTracking.php
	 * @global string $wgContributionTrackingDBpassword : Database password,
	 * defined in ContributionTracking.php
	 * @staticvar \Wikimedia\Rdbms\IDatabase $db
	 * @return \Wikimedia\Rdbms\IDatabase The established database connection
	 */
	static function contributionTrackingConnection() {
		global $wgContributionTrackingDBserver, $wgContributionTrackingDBname;
		global $wgContributionTrackingDBuser, $wgContributionTrackingDBpassword;

		static $db;

		if ( !$db ) {
			if ( $wgContributionTrackingDBserver === null &&
				$wgContributionTrackingDBname === null
			) {
				$db = wfGetDB( DB_MASTER );
			} else {
				$params = [
					'host' => $wgContributionTrackingDBserver,
					'user' => $wgContributionTrackingDBuser,
					'password' => $wgContributionTrackingDBpassword,
					'dbname' => $wgContributionTrackingDBname
				];
				$db = Database::factory( 'mysql', $params );
			}
		}

		return $db;
	}
}
