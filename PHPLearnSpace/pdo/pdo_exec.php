<?php
	/**
	 * 
	 */
	try {
		$pdo = new PDO('mysql:host=sdm372453150.my3w.com;dbname=sdm372453150_db', 'sdm372453150', '15118093883dong');
		// exec():执行一条sql语句并返回其他受影响的的记录条数，如果没有受影响的记录，返回0
		// exec对于select语句没有作用
		$sql = "CREATE TABLE IF NOT EXISTS podtable(id INT UNSIGNED AUTO_INCREMENT KEY, username VARCHAR(20) NOT NULL UNIQUE, password CHAR(32) NOT NULL)";

		// exec插入一条数据，返回受影响的行数
		$into = "INSERT INTO account(username, usertype,password,nickname) values('dd',1,'123456788', 'nick')"; // 返回1
		$res = $pdo->exec($sql);
		var_dump($res);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>