<?php
	//include all DAO files
	require_once('registration/class/sql/Connection.class.php');
	require_once('registration/class/sql/ConnectionFactory.class.php');
	require_once('registration/class/sql/ConnectionProperty.class.php');
	require_once('registration/class/sql/QueryExecutor.class.php');
	require_once('registration/class/sql/Transaction.class.php');
	require_once('registration/class/sql/SqlQuery.class.php');
	require_once('registration/class/core/ArrayList.class.php');
	require_once('registration/class/dao/DAOFactory.class.php');
 	
	require_once('registration/class/dao/AmApiProductDAO.class.php');
	require_once('registration/class/dto/AmApiProduct.class.php');
	require_once('registration/class/mysql/AmApiProductMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/AmApiProductMySqlExtDAO.class.php');
	require_once('registration/class/dao/AmApiSubscriptionDAO.class.php');
	require_once('registration/class/dto/AmApiSubscription.class.php');
	require_once('registration/class/mysql/AmApiSubscriptionMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/AmApiSubscriptionMySqlExtDAO.class.php');
	require_once('class/dao/MainContactMessagesDAO.class.php');
	require_once('class/dto/MainContactMessage.class.php');
	require_once('class/mysql/MainContactMessagesMySqlDAO.class.php');
	require_once('class/mysql/ext/MainContactMessagesMySqlExtDAO.class.php');
	require_once('registration/class/dao/ServiceAccountsDAO.class.php');
	require_once('registration/class/dto/ServiceAccount.class.php');
	require_once('registration/class/mysql/ServiceAccountsMySqlDAO.class.php');
	require_once('registration/class/mysql/ext/ServiceAccountsMySqlExtDAO.class.php');

?>