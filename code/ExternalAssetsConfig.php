<?php

class ExternalAssetsConfig extends Object {

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
	private static $external_name = 'static';

	/**
	 * set to true if the domain points to the assets folder
	 *
	 * @config
	 * @var boolean
	 */
	private static $external_points_to_assets = false;

}