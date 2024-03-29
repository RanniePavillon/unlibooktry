<?php

class CPanel_Api {
	
	public function __construct()
	{
		define("CPANELAPIURL",'https://unlibooks.com/secured/cpanel/index.php');
	}
	
	public function create_subdomain($subdomain, $domain, $path)
	{

		$post_data = array();
		$post_data['subdomain'] 	= $subdomain;
		$post_data['domain'] 		= $domain;
		$post_data['path'] 		= $path;
		$post_data['req'] 		= "CSD";

		$this->execute($post_data);
	}

	public function create_database($database)
	{

		$post_data = array();
		$post_data['database'] 	= $database;
		$post_data['req'] 	= "CDB";

		$this->execute($post_data);
	}
	
	function execute($post_data)
	{
		$curl_connection = curl_init(CPANELAPIURL);
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
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