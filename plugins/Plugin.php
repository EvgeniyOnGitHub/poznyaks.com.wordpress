<?php

/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/11/2017
 * Time: 10:30 AM
 */


class Plugin extends PluginAbstract {

	// конструктор, который делает практически все :)
	function __construct( $name, $dir ) {
		$this->setDir( $dir );
		$this->setName( $this->getFolderNameInPrettyView( $dir ) );
		$this->setFullContent( $this->getContent( $this->getDir() . "/description.txt" ) );
		$this->setDescription( $this->getFullContent() );

		$this->parsedFullContentArray = $this->parseTxtFile( $this->getFullContent() );
		$this->parsePluginTXTContentArrayToObjectPropertyes( $this->parsedFullContentArray );

		// не уверен, правильно ли я вызываю другой класс в этом конструкторе :/
		// Это уже второй объект этого класса, может быть имеет смысл создать Singleton?
	}

	public function getContent( $file ) {
		return nl2br( file_get_contents( $file ) );
	}

	function getFullContent() {
		return $this->fullContentRaw;
	}

	function setFullContent( $data ) {
		$this->fullContentRaw = $data;
	}


	public function getFolderNameInPrettyView( $dir ) {
		if ( $handle = opendir( $dir ) ) {
			if ( is_dir( $dir ) ) {
				$arr = explode( "plugins\\", $dir );
				if ( ! $arr[1] ) {
					$arr = explode( "/plugins/", $dir );
				}
				$string = $arr[1];
				$string = str_replace( "-", " ", $string );

				return ucwords( $string );
			}
		}

		return '';
	}

	//Парсит любой txt файл, где есть символы == Заголовок == или == Описание ==
	function parseTxtFile( $string ) {
		$megaArray          = [];
		$pattern            = '/(==)(.+)(==)/';
		$matchesDescription = preg_split( $pattern, $string );
		$pattern            = '/(==)(.+)(==)/';
		preg_match_all( $pattern, $string, $matches, PREG_PATTERN_ORDER );
		$matchesTitles = $matches[0];
		for ( $i = 0; $i < sizeof( $matchesTitles ); $i ++ ) {
			$megaArray[ $matchesTitles[ $i ] ] = $matchesDescription[ $i + 1 ];
		}
		return $megaArray;
	}

	// __set & __get наследуются от PluginAbstract
	function parsePluginTXTContentArrayToObjectPropertyes( $array ) {
		$this->pluginShortDescription = $array['=== User Info In Email For Contact Form 7 ==='];
		$this->pluginLongDescription  = $array['== Description =='];
		$this->pluginInstallation     = $array['== Installation =='];
		$this->pluginFAQ              = $array['== Frequently asked questions =='];
		$this->pluginScreenshots      = $array['== Screenshots =='];
		$this->pluginChangelog        = $array['== Changelog =='];
		$this->pluginUpgradeNotice    = $array['== Upgrade notice =='];
		$this->pluginArbitrarySection = $array['== Arbitrary section 1 =='];
	}


}