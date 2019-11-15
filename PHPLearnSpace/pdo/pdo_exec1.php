<?php
	/**
	 * 
	 */
	try {
		$pdo = new PDO('mysql:host=sdm372453150.my3w.com;dbname=sdm372453150_db', 'sdm372453150', '15118093883dong');
		// exec():执行一条sql语句并返回其他受影响的的记录条数，如果没有受影响的记录，返回0
		// exec对于select语句没有作用
	
		// exec插入多条数据，返回受影响的行数
		$into = "INSERT INTO podtable(username, password) values('ethan8','123')"; 
		$res = $pdo->exec($into); // 返回受印象的行数
		var_dump($pdo->lastInsertId());
		var_dump($res);
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>