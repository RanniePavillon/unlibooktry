<?php
/**
 * Class that operate on table 'main_contact_messages'. Database Mysql.
 *
 * @author: http://phpdao.com
 * @date: 2015-02-26 06:58
 */
class MainContactMessagesMySqlDAO implements MainContactMessagesDAO{

	/**
	 * Get Domain object by primry key
	 *
	 * @param String $id primary key
	 * @return MainContactMessagesMySql 
	 */
	public function load($id){
		$sql = 'SELECT * FROM main_contact_messages WHERE id = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->setNumber($id);
		return $this->getRow($SqlQuery2);
	}

	/**
	 * Get all records from table
	 */
	public function queryAll(){
		$sql = 'SELECT * FROM main_contact_messages';
		$SqlQuery2 = new SqlQuery($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
	 * Get all records from table ordered by field
	 *
	 * @param $orderColumn column name
	 */
	public function queryAllOrderBy($orderColumn){
		$sql = 'SELECT * FROM main_contact_messages ORDER BY '.$orderColumn;
		$SqlQuery2 = new SqlQuery($sql);
		return $this->getList($SqlQuery2);
	}
	
	/**
 	 * Delete record from table
 	 * @param mainContactMessage primary key
 	 */
	public function delete($id){
		$sql = 'DELETE FROM main_contact_messages WHERE id = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->setNumber($id);
		return $this->executeUpdate($SqlQuery2);
	}
	
	/**
 	 * Insert record to table
 	 *
 	 * @param MainContactMessagesMySql mainContactMessage
 	 */
	public function insert($mainContactMessage){
		$sql = 'INSERT INTO main_contact_messages (date_sent, name, email, company, message) VALUES (?, ?, ?, ?, ?)';
		$SqlQuery2 = new SqlQuery($sql);
		
		$SqlQuery2->set($mainContactMessage->dateSent);
		$SqlQuery2->set($mainContactMessage->name);
		$SqlQuery2->set($mainContactMessage->email);
		$SqlQuery2->set($mainContactMessage->company);
		$SqlQuery2->set($mainContactMessage->message);

		$id = $this->executeInsert($SqlQuery2);	
		$mainContactMessage->id = $id;
		return $id;
	}
	
	/**
 	 * Update record in table
 	 *
 	 * @param MainContactMessagesMySql mainContactMessage
 	 */
	public function update($mainContactMessage){
		$sql = 'UPDATE main_contact_messages SET date_sent = ?, name = ?, email = ?, company = ?, message = ? WHERE id = ?';
		$SqlQuery2 = new SqlQuery($sql);
		
		$SqlQuery2->set($mainContactMessage->dateSent);
		$SqlQuery2->set($mainContactMessage->name);
		$SqlQuery2->set($mainContactMessage->email);
		$SqlQuery2->set($mainContactMessage->company);
		$SqlQuery2->set($mainContactMessage->message);

		$SqlQuery2->setNumber($mainContactMessage->id);
		return $this->executeUpdate($SqlQuery2);
	}

	/**
 	 * Delete all rows
 	 */
	public function clean(){
		$sql = 'DELETE FROM main_contact_messages';
		$SqlQuery2 = new SqlQuery($sql);
		return $this->executeUpdate($SqlQuery2);
	}

	public function queryByDateSent($value){
		$sql = 'SELECT * FROM main_contact_messages WHERE date_sent = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByName($value){
		$sql = 'SELECT * FROM main_contact_messages WHERE name = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByEmail($value){
		$sql = 'SELECT * FROM main_contact_messages WHERE email = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByCompany($value){
		$sql = 'SELECT * FROM main_contact_messages WHERE company = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}

	public function queryByMessage($value){
		$sql = 'SELECT * FROM main_contact_messages WHERE message = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->getList($SqlQuery2);
	}


	public function deleteByDateSent($value){
		$sql = 'DELETE FROM main_contact_messages WHERE date_sent = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByName($value){
		$sql = 'DELETE FROM main_contact_messages WHERE name = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByEmail($value){
		$sql = 'DELETE FROM main_contact_messages WHERE email = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByCompany($value){
		$sql = 'DELETE FROM main_contact_messages WHERE company = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}

	public function deleteByMessage($value){
		$sql = 'DELETE FROM main_contact_messages WHERE message = ?';
		$SqlQuery2 = new SqlQuery($sql);
		$SqlQuery2->set($value);
		return $this->executeUpdate($SqlQuery2);
	}


	
	/**
	 * Read row
	 *
	 * @return MainContactMessagesMySql 
	 */
	protected function readRow($row){
		$mainContactMessage = new MainContactMessage();
		
		$mainContactMessage->id = $row['id'];
		$mainContactMessage->dateSent = $row['date_sent'];
		$mainContactMessage->name = $row['name'];
		$mainContactMessage->email = $row['email'];
		$mainContactMessage->company = $row['company'];
		$mainContactMessage->message = $row['message'];

		return $mainContactMessage;
	}
	
	protected function getList($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
		$ret = array();
		for($i=0;$i<count($tab);$i++){
			$ret[$i] = $this->readRow($tab[$i]);
		}
		return $ret;
	}
	
	/**
	 * Get row
	 *
	 * @return MainContactMessagesMySql 
	 */
	protected function getRow($SqlQuery2){
		$tab = QueryExecutor2::execute($SqlQuery2);
		if(count($tab)==0){
			return null;
		}
		return $this->readRow($tab[0]);		
	}
	
	/**
	 * Execute sql query
	 */
	protected function execute($SqlQuery2){
		return QueryExecutor2::execute($SqlQuery2);
	}
	
		
	/**
	 * Execute sql query
	 */
	protected function executeUpdate($SqlQuery2){
		return QueryExecutor2::executeUpdate($SqlQuery2);
	}

	/**
	 * Query for one row and one column
	 */
	protected function querySingleResult($SqlQuery2){
		return QueryExecutor2::queryForString($SqlQuery2);
	}

	/**
	 * Insert row to table
	 */
	protected function executeInsert($SqlQuery2){
		return QueryExecutor2::executeInsert($SqlQuery2);
	}
}
?>