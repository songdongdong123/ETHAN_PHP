<?php  
	// 1.通过参数形式链接pdo
	// try {
	// 	// $dsn是数据源
	// 	$dsn='mysql:host=sdm372453150.my3w.com;dbname=sdm372453150_db';
	// 	$username = 'sdm372453150';
	// 	$password ='15118093883dong';
	// 	$pdo = new PDO($dsn, $username, $password);
	// 	var_dump($pdo);
	// }catch(PDOException $e) {
	// 	echo $e->getMessage();
	// }
	
	//2.通过uri连接数据库
	// try{
	// 	$dsn='uri:http://www.ethansblogs.com/pdo/dsn.txt';
	// 	$username = 'sdm372453150';
	// 	$password = '15118093883dong';
	// 	$pdo = new PDO($dsn, $username, $password);
	// 	var_dump($pdo);
	// } catch(PDOException $e) {
	// 	echo $e->getMessage();
	// }
	
	//3.通过配置文件连接数据库
	//在php.init中增加mysql的配置 （pdo.dsn.ethan="mysql:host=sdm372453150.my3w.com;dnname=sdm372453150_db"）;
	try{
		$dsn = 'ethan';
		$username = 'sdm372453150';
		$password = '15118093883dong';
		$pdo = new PDO($dsn,$username,$password);
		var_dump($pdo);
	}catch(PDOException $e) {
		// echo "error";
		echo $e->getMessage();
	}
	// phpinfo();
?>