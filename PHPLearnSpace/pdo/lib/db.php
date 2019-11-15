<?php
	/**
	 * 
	 */
	class ConnectMysql {
		public $pdo;
		function __construct() {
			try {
				$dsn='mysql:host=sdm372453150.my3w.com;dnname=sdm372453150_db';
				$username = 'sdm372453150';
				$password ='15118093883dong';
				$this->pdo = new PDO($dsn,$username,$password);
			} catch (PDOException $e) {
				echo $e->getMessage();
			}
		}
	}
?>