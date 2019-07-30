<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2017-03-29 09:15
 */
interface ServiceAccountsDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return ServiceAccounts 
	 */
	public function load($id);

	/**
	 * Get all records from table
	 */
	public function queryAll();
	
	/**
	 * Get all records from table ordered by field
	 * @Param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn);
	
	/**
 	 * Delete record from table
 	 * @param serviceAccount primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param ServiceAccounts serviceAccount
 	 */
	public function insert($serviceAccount);
	
	/**
 	 * Update record in table
 	 *
 	 * @param ServiceAccounts serviceAccount
 	 */
	public function update($serviceAccount);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryBySubdomain($value);

	public function queryByDatabaseName($value);

	public function queryByDatabaseUser($value);

	public function queryByDateRegistered($value);

	public function queryByAccountName($value);

	public function queryBySuffix($value);

	public function queryByEmail($value);

	public function queryByVerified($value);

	public function queryByTrialExpirationDate($value);


	public function deleteBySubdomain($value);

	public function deleteByDatabaseName($value);

	public function deleteByDatabaseUser($value);

	public function deleteByDateRegistered($value);

	public function deleteByAccountName($value);

	public function deleteBySuffix($value);

	public function deleteByEmail($value);

	public function deleteByVerified($value);

	public function deleteByTrialExpirationDate($value);


}
?>