<?php

class ExternalAssetsExtension extends DataExtension {

	/**
	 * domain or subdomain
	 *
	 * @config
	 * @var string
	 */
	private static $domain_name = null;

	/**
	 *
	 * @config
	 * @var string
	 */
	private static $external_name = null;

	/**
	 * set to true if the domain points to the assets folder
	 *
	 * @config
	 * @var boolean
	 */
	private static $external_points_to_assets = null;

	public function setExternalName($value) {
		$this->owner->config()->external_name =  (string) $value;
	}

	public function getExternalName() {
		$externalName = $this->owner->config()->external_name;

		if ($externalName === null) {
			$externalName = Config::inst()->get('ExternalAssetsConfig', 'external_name');
		}
		
		return $externalName;
	}

	public function setExternalPointsToAssets($value) {
		$this->owner->config()->external_points_to_assets = (bool) $value;
	}

	public function getExternalPointsToAssets() {
		$pointsToAssets = $this->owner->config()->external_points_to_assets;

		if ($pointsToAssets === null) {
			$pointsToAssets = Config::inst()->get('ExternalAssetsConfig', 'external_points_to_assets');
		}

		return (bool) $pointsToAssets; 
	}

	public function getDomainName() {
		$domainName = $this->owner->config()->domain_name;
		if ($domainName === null) {
			$domainName = Config::inst()->get('ExternalAssetsConfig', 'domain_name');
		}

		return $domainName ? Director::protocol() . $domainName . '/' : str_replace('://', '://' . $this->getExternalName() . '.', Director::absoluteBaseURL());
	}

	function ExternalLink() {
		$abs = $this->getDomainName();

		$relative = $this->owner->RelativeLink();

		if ($this->getExternalPointsToAssets()) {
			$relative = str_replace(ASSETS_DIR . '/', '', $relative);
		}

		return $abs . $relative;
	}

}