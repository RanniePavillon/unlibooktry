<?php

class Database{
	
	public $ub_db_url;
	
	function __construct()
	{
		$this->ub_db_url = UB_DB_URL;
	}
	
	function index(){
		
	}
	
	static function registerDatabase(){
		// echo file_get_contents(UB_DB_URL . 'getSetAvailableDatabase');
		// echo UB_DB_URL . 'getSetAvailableDatabase';
		// exit;
		return self::executeDbFunction('getSetAvailableDatabase/');
	}
	
	private static function executeDbFunction($function){
		
		$curl_connection = curl_init(UB_DB_URL . $function);
		// echo UB_DB_URL . $function;
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
		$post_string = '&data=true';
		
		curl_setopt($curl_connection, CURLOPT_POSTFIELDS, $post_string);
		$result = curl_exec($curl_connection);
		curl_close($curl_connection);
		
		// echo $result;
		
		if($result != "")
			return json_decode($result);
		
		return false;
	}
	
}