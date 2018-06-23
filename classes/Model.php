<?php
abstract class Model
{

	protected $dbh, $stmt;

	public function __construct(){

		try{

			$this->dbh = new PDO("mysql:host=" . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);
			$this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		} catch (PDOException $e){

			die($e->getMessage());
		}
	}

	public function execute(){

		$this->stmt->execute();
	}

	public function query($query){

		$this->stmt = $this->dbh->prepare($query);
	}

	public function resultSet(){

		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
	}

	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ASSOC);
	}

		public function lastInsertId(){

		return $this->dbh->lastInsertId();
	}

	public function bind($param, $value, $type = null){

	if(is_null($type)){
		switch (true){
			case is_int($value):
					$type = PDO::PARAM_INT;
				break;
			case is_bool($value):
				$type = PDO::PARAM_BOOL;
				break;
			case is_null($value):
				$type = PDO::PARAM_NULL;
				break;		
			default:
			$type = PDO::PARAM_STR;	

			}
		}
		$this->stmt->bindValue($param, $value, $type);
	}

}