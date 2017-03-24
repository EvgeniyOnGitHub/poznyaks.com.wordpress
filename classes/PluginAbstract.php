<?php

/**
 * Created by IntelliJ IDEA.
 * User: Evgeniy
 * Date: 3/11/2017
 * Time: 9:32 AM
 */
abstract class PluginAbstract {
	private $name;
	private $description;
	private $dir;
	private $fullContentRaw;
	private $parsedFullContentArray;
	private $pluginShortDescription;
	private $pluginLongDescription;
	private $pluginInstallation;
	private $pluginFAQ;
	private $pluginScreenshots;
	private $pluginChangelog;
	private $pluginUpgradeNotice;
	private $pluginArbitrarySection;


	function __set( $name, $value ) {
		switch ( $name ) {
			case 'pluginShortDescription':
				$this->pluginShortDescription = $value;
			break;
			case 'pluginLongDescription':
				$this->pluginLongDescription = $value;
			break;
			case 'pluginInstallation':
				$this->pluginInstallation = $value;
			break;
			case 'pluginFAQ':
				$this->pluginFAQ = $value;
			break;
			case 'pluginScreenshots':
				$this->pluginScreenshots = $value;
			break;
			case 'pluginChangelog':
				$this->pluginChangelog = $value;
			break;
			case 'pluginUpgradeNotice':
				$this->pluginUpgradeNotice = $value;
			break;
			case 'pluginArbitrarySection':
				$this->pluginArbitrarySection = $value;
			break;
			case 'fullContentRaw':
				$this->fullContentRaw = $value;
			break;
			case 'parsedFullContentArray':
				$this->parsedFullContentArray = $value;
			break;

			default:
		}
	}

	function __get( $name) {
		switch ( $name ) {
			case 'pluginShortDescription':
				return $this->pluginShortDescription;
			break;
			case 'pluginLongDescription':
				return $this->pluginLongDescription;
			break;
			case 'pluginInstallation':
				return  $this->pluginInstallation;
			break;
			case 'pluginFAQ':
				return 	$this->pluginFAQ;
			break;
			case 'pluginScreenshots':
				return $this->pluginScreenshots;
			break;
			case 'pluginChangelog':
				return $this->pluginChangelog;
			break;
			case 'pluginUpgradeNotice':
				return $this->pluginUpgradeNotice;
			break;
			case 'pluginArbitrarySection':
				return $this->pluginArbitrarySection;
			break;
			case 'fullContentRaw':
				return $this->fullContentRaw;
			break;
			case 'parsedFullContentArray':
				return $this->parsedFullContentArray;
			break;

			default:
		}
	}



	public function getName() {
		return $this->name;
	}

	public function setName($value) {
		$this->name = $value;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($value) {
		$this->description = $value;
	}

	public function getContent($file){

	}

	public function setDir($value) {
		$this->dir = $value;
	}

	public function getDir(){
		return $this->dir;
	}





}