<?php
	// Include ScreenSteps Live class file
	require_once('sslive_class.php');
	
	// Create ScreenSteps Live object using API account credentials
	$sslive = new SSLiveAPI('example.screenstepslive.com', 'http');
	$sslive->SetUserCredentials('example', 'example');
	
	
	/**
	 * Helper function
	 */
	if ( !function_exists( 'pr' ) ) {
		function pr( $thing ) {
			echo '<pre>';
			print_r( $thing );
			echo '</pre>';
		}
	}
?>