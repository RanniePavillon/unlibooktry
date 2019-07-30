<?php
/**
 * Intreface DAO
 *
 * @author: http://phpdao.com
 * @date: 2015-02-26 06:58
 */
interface MainContactMessagesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @Return MainContactMessages 
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
 	 * @param mainContactMessage primary key
 	 */
	public function delete($id);
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MainContactMessages mainContactMessage
 	 */
	public function insert($mainContactMessage);
	
	/**
 	 * Update record in table
 	 *
 	 * @param MainContactMessages mainContactMessage
 	 */
	public function update($mainContactMessage);	

	/**
	 * Delete all rows
	 */
	public function clean();

	public function queryByDateSent($value);

	public function queryByName($value);

	public function queryByEmail($value);

	public function queryByCompany($value);

	public function queryByMessage($value);


	public function deleteByDateSent($value);

	public function deleteByName($value);

	public function deleteByEmail($value);

	public function deleteByCompany($value);

	public function deleteByMessage($value);


}
?>