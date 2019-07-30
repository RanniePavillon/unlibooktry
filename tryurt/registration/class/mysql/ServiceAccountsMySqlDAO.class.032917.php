<?php
/**
 * Class that operate on table 'service_accounts'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-16 09:17
 */
class ServiceAccountsMySqlDAO implements ServiceAccountsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return ServiceAccountsMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM service_accounts WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($id);
		return $this->getRow($sqlQuery);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM service_accounts';
		$sqlQuery = new SqlQuery2($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM service_accounts ORDER BY '.$orderColumn;
		$sqlQuery = new SqlQuery2($sql);
		return $this->getList($sqlQuery);
	}
	
	/**
 	 * Delete record from table
 	 * @param serviceAccount primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM service_accounts WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($id);
		return $this->executeUpdate($sqlQuery);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiceAccountsMySql serviceAccount
 	 */
	public function insert($serviceAccount){
		$sql = 'INSERT INTO service_accounts (subdomain, database_name, database_user, date_registered, account_name, suffix, email, verified) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
		$sqlQuery = new SqlQuery2($sql);
		
		$sqlQuery->set($serviceAccount->subdomain);
		$sqlQuery->set($serviceAccount->databaseName);
		$sqlQuery->set($serviceAccount->databaseUser);
		$sqlQuery->set($serviceAccount->dateRegistered);
		$sqlQuery->set($serviceAccount->accountName);
		$sqlQuery->set($serviceAccount->suffix);
		$sqlQuery->set($serviceAccount->email);
		$sqlQuery->setNumber($serviceAccount->verified);
		$sqlQuery->set($serviceAccount->trialExpirationDate);

		$id = $this->executeInsert($sqlQuery);	
		$serviceAccount->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiceAccountsMySql serviceAccount
 	 */
	public function update($serviceAccount){
		$sql = 'UPDATE service_accounts SET subdomain = ?, database_name = ?, database_user = ?, date_registered = ?, account_name = ?, suffix = ?, email = ?, verified = ? WHERE id = ?';
		$sqlQuery = new SqlQuery2($sql);
		
		$sqlQuery->set($serviceAccount->subdomain);
		$sqlQuery->set($serviceAccount->databaseName);
		$sqlQuery->set($serviceAccount->databaseUser);
		$sqlQuery->set($serviceAccount->dateRegistered);
		$sqlQuery->set($serviceAccount->accountName);
		$sqlQuery->set($serviceAccount->suffix);
		$sqlQuery->set($serviceAccount->email);
		$sqlQuery->setNumber($serviceAccount->verified);
		$sqlQuery->set($serviceAccount->trialExpirationDate);

		$sqlQuery->setNumber($serviceAccount->id);
		return $this->executeUpdate($sqlQuery);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM service_accounts';
		$sqlQuery = new SqlQuery2($sql);
		return $this->executeUpdate($sqlQuery);
	}

	public function queryBySubdomain($value){
		$sql = 'SELECT * FROM service_accounts WHERE subdomain = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDatabaseName($value){
		$sql = 'SELECT * FROM service_accounts WHERE database_name = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDatabaseUser($value){
		$sql = 'SELECT * FROM service_accounts WHERE database_user = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByDateRegistered($value){
		$sql = 'SELECT * FROM service_accounts WHERE date_registered = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByAccountName($value){
		$sql = 'SELECT * FROM service_accounts WHERE account_name = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryBySuffix($value){
		$sql = 'SELECT * FROM service_accounts WHERE suffix = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM service_accounts WHERE email = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function queryByVerified($value){
		$sql = 'SELECT * FROM service_accounts WHERE verified = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($value);
		return $this->getList($sqlQuery);
	}

	public function queryByTrialExpirationDate($value){
		$sql = 'SELECT * FROM service_accounts WHERE trial_expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->getList($sqlQuery);
	}

	public function deleteBySubdomain($value){
		$sql = 'DELETE FROM service_accounts WHERE subdomain = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDatabaseName($value){
		$sql = 'DELETE FROM service_accounts WHERE database_name = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDatabaseUser($value){
		$sql = 'DELETE FROM service_accounts WHERE database_user = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByDateRegistered($value){
		$sql = 'DELETE FROM service_accounts WHERE date_registered = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByAccountName($value){
		$sql = 'DELETE FROM service_accounts WHERE account_name = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteBySuffix($value){
		$sql = 'DELETE FROM service_accounts WHERE suffix = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM service_accounts WHERE email = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}

	public function deleteByVerified($value){
		$sql = 'DELETE FROM service_accounts WHERE verified = ?';
		$sqlQuery = new SqlQuery2($sql);
		$sqlQuery->setNumber($value);
		return $this->executeUpdate($sqlQuery);
	}
	
	public function deleteByTrialExpirationDate($value){
		$sql = 'DELETE FROM service_accounts WHERE trial_expiration_date = ?';
		$sqlQuery = new SqlQuery($sql);
		$sqlQuery->set($value);
		return $this->executeUpdate($sqlQuery);
	}


	
	/**
	 * Read row
	 *
	 * @return ServiceAccountsMySql 
	 */
	protected function readRow($row){
		$serviceAccount = new ServiceAccount();
		
		$serviceAccount->id = $row['id'];
		$serviceAccount->subdomain = $row['subdomain'];
		$serviceAccount->databaseName = $row['database_name'];
		$serviceAccount->databaseUser = $row['database_user'];
		$serviceAccount->dateRegistered = $row['date_registered'];
		$serviceAccount->accountName = $row['account_name'];
		$serviceAccount->suffix = $row['suffix'];
		$serviceAccount->email = $row['email'];
		$serviceAccount->verified = $row['verified'];

		return $serviceAccount;
	}
	
	protected function getList($sqlQuery){
		$tab = QueryExecutor2::execute($sqlQuery);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return ServiceAccountsMySql 
	 */
	protected function getRow($sqlQuery){
		$tab = QueryExecutor2::execute($sqlQuery);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($sqlQuery){
		return QueryExecutor2::execute($sqlQuery);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($sqlQuery){
		return QueryExecutor2::executeUpdate($sqlQuery);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($sqlQuery){
		return QueryExecutor2::queryForString($sqlQuery);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($sqlQuery){
		return QueryExecutor2::executeInsert($sqlQuery);
	}
}
?>