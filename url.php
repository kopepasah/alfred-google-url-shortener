<?php
/**
 * Function for Google Short URL with Alfred.
 * 
 * @package Google URL Shortener
 * @author Justin Kopepasah
 * @version 1.0.0
*/

function get_url( $query ) {
	/**
	 * Create the new workflow instance.
	 * 
	 * @since 1.0.0
	*/
	$workflow = new Workflows();
	
	// Create google url instance with key.
	$url = new Google_URL_API( API_KEY );
	
	/**
	 * Convert query to an array by using spaces as
	 * the delimiter and then remove any empty values.
	 * 
	 * @since 1.0.0
	*/
	$query = explode( ' ', $query );
	
	$arg = $url->shorten( $query[0] );
	
	/**
	 * Create and copy the URL.
	 * 
	 * @since 1.0.0
	*/
	$workflow->result( '', $arg, 'Short URL: ' . $arg, 'Press Return to copy to clipboard', 'icon.png' );
	
	/**
	 * Echo the New URL.
	 * 
	 * @since 1.0.0
	*/
	echo $workflow->toxml();
}

