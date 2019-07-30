<?php

/**
 * DAOFactory
 * @author: http://phpdao.com
 * @date: ${date}
 */
class DAOFactory2{
	
	/**
	 * @return AmApiProductDAO
	 */
	public static function getAmApiProductDAO(){
		return new AmApiProductMySqlExtDAO2();
	}

	/**
	 * @return AmApiSubscriptionDAO
	 */
	public static function getAmApiSubscriptionDAO2(){
		return new AmApiSubscriptionMySqlExtDAO2();
	}

	/**
	 * @return MainContactMessagesDAO
	 */
	public static function getMainContactMessagesDAO(){
		return new MainContactMessagesMySqlExtDAO();
	}

	/**
	 * @return ServiceAccountsDAO
	 */
	public static function getServiceAccountsDAO(){
		return new ServiceAccountsMySqlExtDAO();
	}


}
?>