<?php

class AmemberAPI {

	static function validate_receipt($receipt){

// 		$curl_connection = curl_init('https://sjcgroup.net/amember_api/');
		$curl_connection = curl_init('http://sjcgroup.net/secured/amember_api/index.php');
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
		$post_data = array();
		$post_data['receipt_id'] 	= $receipt;
		$post_data['todo'] 			= "vr";

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
	
	static function get_expiration($amember_id, $product_title){

// 		$curl_connection = curl_init('https://sjcgroup.net/amember_api/');
		$curl_connection = curl_init('http://sjcgroup.net/secured/amember_api/index.php');
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
		$post_data = array();
		$post_data['amember_id'] = $amember_id;
		$post_data['product_title'] = $product_title;
		$post_data['todo'] = "ge";

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
	
	/**
	 *	Function : get_latestPayment
	 *	*************************************************************
	 *	This function gets the latest payment of a user per product
	 *	
	 *	Required Parameters	
	 *	- amember id: Id generated on an amember account
	 *	- product title: Amember product name
	 *
	 */
	
	static function get_lastpayment($amember_id, $product_title){

// 		$curl_connection = curl_init('https://sjcgroup.net/amember_api/index.php');
		$curl_connection = curl_init('http://sjcgroup.net/secured/amember_api/index.php');
		curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
		curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl_connection, CURLOPT_FOLLOWLOCATION, 1);
		
		$post_data = array();
		$post_data['amember_id'] 	= $amember_id;
		$post_data['product_title'] 	= $product_title;
		$post_data['todo'] 				= "glp";

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