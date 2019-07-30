<?php

class LicenseActivator{

	protected $url_checker = 'http://sjcgroup.net/member/softsale/api';
	 /** @var string api link for check-license */
	protected $url_activate = 'http://sjcgroup.net/member/softsale/api/activate';
	/** @var string api link for activate-license */
	
	public function __construct()
	{
		@require_once('amember_softsale_license_api.php');
	}

	public function checkLicense($license_key = '')
	{
		
		if($license_key != '')
		{
			$checker = new Am_LicenseChecker($license_key, $this->url_checker, '0b96aef355b486b2d3dd2a37bbc3295a40fda9a9');
			
			if ($checker->checkLicenseKey())
				return true;
			else 
				return false;
		} 
		else return false;
		
	}
	
	public function checkLicenseActivation($license_key = '')
	{
		
	}
	
	public function activateLicense($license_key = '')
	{
		if($license_key != '')
		{
			$activator = new Am_LicenseChecker($license_key, $this->url_activate, '0b96aef355b486b2d3dd2a37bbc3295a40fda9a9');
			
			if ($activator->activate($license_key))
				return true;
			else 
				return false;
		}
	}
	
	public function getLicenseReceiptId($license)
	{
	
		$curl_connection = curl_init('http://sjcgroup.net/amember_api/license.php');
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
		$post_data = array();
		$post_data['prod_lcns'] 	= $license;
		$post_data['api_action'] 		= "GLR";

		$post_items = array();
		foreach ( $post_data as $key => $value) 
		{
			$post_items[] = $key . '=' . $value;
		}
		$post_string = implode ('&', $post_items);
		
		curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
		$result = curl_exec($curl_connection);
		
		curl_close($curl_connection);

		if($result != "")
			return json_decode($result);

		return false;
	}

}

?>