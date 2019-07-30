<?php
/**
 * Connection properties
 *
 * @author: http://phpdao.com
 * @date: 27.11.2007
 */
class ConnectionProperty2{

	private static $host = DATABASEHOST;
	private static $user = 'root';
	private static $password = '';
	private static $database = 'unlibooks_for_urt_main';
	
	public static function getHost(){
		return ConnectionProperty2::$host;
	}

	public static function getUser(){
		return defined("MAINDATABASEUSER") ? MAINDATABASEUSER : ConnectionProperty2::$user;
	}

	public static function getPassword(){
		return defined("MAINDATABASEPASS") ? MAINDATABASEPASS : ConnectionProperty2::$password;
	}

	public static function getDatabase(){
		return defined("MAINDATABASENAME") ? MAINDATABASENAME : ConnectionProperty2::$database;
	}
	
	public static function getConnection(){
		return mysqli_connect(
			ConnectionProperty2::$host,
			defined("MAINDATABASEUSER") ? MAINDATABASEUSER : ConnectionProperty2::$user,
			defined("MAINDATABASEPASS") ? MAINDATABASEPASS : ConnectionProperty2::$password,
			defined("MAINDATABASENAME") ? MAINDATABASENAME : ConnectionProperty2::$database
		);
	}
}
?>