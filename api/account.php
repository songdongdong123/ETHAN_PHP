<?php
header('Access-Control-Allow-Origin:*');
header("Content-Type: text/html; charset=utf-8");
if(isset($_SERVER['HTTP_ORIGIN'])){
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header("Access-Control-Allow-Credentials:true");
        }

class Account {
	public	$servername = "sdm372453150.my3w.com";
	public	$username = "sdm372453150";
	public	$password = "15118093883dong";
	public	$dbname = "sdm372453150_db";
	public function getUserInfo(){
			$conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
			if (!$conn) {
				var_dump($conn);
			  die("连接失败: " . mysqli_connect_errno());
			} 
			mysqli_query($conn, "set names 'utf8'");
			$sql = "SELECT * FROM DB1";
			$result = mysqli_query($conn, $sql);
			$data = array();
			while($row = mysqli_fetch_array($result)) {
				$tempArr = array();
				// $tempArr = $row;
				$tempArr["user_age"] = $row["user_age"];
				$tempArr["user_type"] = $row["user_type"];
				$tempArr["user_name"] = $row["user_name"];
				$data[] = $tempArr;
			}
			mysqli_close($conn);
			$ret = array('retCode' => 0, "data"=>$data);
			echo json_encode($ret, JSON_UNESCAPED_UNICODE);
			
		}

}
	$model = $_REQUEST["c"];
	$fun = $_REQUEST["m"];
	$obj = new $model();
	$obj->$fun();
?>
