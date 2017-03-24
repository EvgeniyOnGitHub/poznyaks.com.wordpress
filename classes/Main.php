<?php

/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/11/2017
 * Time: 12:41 AM
 */
class Main implements MainInterface {
	public $pluginsList = [];

	public $buttons = [
		0 => 'btn-primary',
		1 => 'btn-success',
		2 => 'btn-info',
		3 => 'btn-warning',
		4 => 'btn-danger'
	];

	function __construct() {
		$this->listPlugins();
	}

	function getHeader( $title ) {
		require_once 'pages/header.php';
	}

	function getMenu( $pluginsList ) {
		require_once 'pages/menu.php';
	}

	function getBody( $header, $content ) {
		require_once 'pages/body.php';
	}

	function getPage( $header, $object, $page ) {

		require_once "pages/" . $page . ".php";
	}

	function getFooter() {
		require_once 'pages/footer.php';
	}


	function switchByGet( $data ) {

// List of plugins
		switch ( $data ) {

			case 'user-info-in-email-for-contact-form-7':
				include_once 'plugins/' . $data . '/' . $data . '.php';
			break;

			default:
				header( 'Location index.php' );
				die();
		}
	}

	function listPlugins() {
		if ( $handle = opendir( 'plugins' ) ) {
			while ( false !== ( $entry = readdir( $handle ) ) ) {
				if ( $entry != "." && $entry != ".." ) {
					if ( is_dir( 'plugins/' . $entry ) ) {
						$this->getFolderNameInPrettyView( $entry );

						$this->pluginsList[ $this->getFolderNameInPrettyView( $entry ) ] = $entry;
					}
				}
			}
			closedir( $handle );
		}
	}

	function getFolderNameInPrettyView( $dir ) {
		$string = str_replace( "-", " ", $dir );

		return ucwords( $string );
	}


}

