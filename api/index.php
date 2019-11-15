<?php
header('Access-Control-Allow-Origin:*');
header("Content-Type: text/html; charset=utf-8");
if(isset($_SERVER['HTTP_ORIGIN'])){
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header("Access-Control-Allow-Credentials:true");
        }
spl_autoload_register(function($className){
		include str_replace("\\", "/", $className.".php"); // 这里其实就是讲接收到类名转换为路径参数，去自动加载响应的文件
});
class Account extends lib\util{
	private $conn; // 只能在类的内部调用，不能再类的外部使用
	public $retCode = 0;
	public $errCode = 0;
	public $msg = 'success';
	function __construct () {
		// 连接数据库（实例化对象时的初始操作）
		$this->conn = parent::mysqlInit('sdm372453150.my3w.com', 'sdm372453150', '15118093883dong', 'sdm372453150_db');
		if (!$this->conn) {
			var_dump($this->conn);
			die("连接失败: " . mysqli_connect_errno());
		}
	}
	public function getUserInfo(){
		// 获取用户信息
		$userid = parent::getPostParams('userid');
		$sql = "SELECT * FROM account WHERE userid=$userid";
		$result = mysqli_query($this->conn, $sql);
		$data = array();
		while($row = mysqli_fetch_array($result)) {
			$tempArr = array();
			$tempArr["user_id"] = $row["userid"];
			$tempArr["user_type"] = $row["usertype"];
			$tempArr["user_name"] = $row["username"];
			$tempArr["nick_name"] = $row["nickname"];
			$data[] = $tempArr;
		}
		mysqli_close($this->conn);
		$ret = array('retCode' => $this->retCode, 'errCode' => $this->errCode,"data"=>$data);
		echo json_encode($ret, JSON_UNESCAPED_UNICODE);
	}
	public function Register () {
		// 用户注册
		$username = parent::getPostParams('username');
		$sql = "SELECT COUNT('userid') AS total  FROM account WHERE username='$username'";
		$result = mysqli_fetch_assoc(mysqli_query($this->conn, $sql));
		$data = array();
		if (isset($result['total']) && $result['total'] > 0) {
			$this->errCode=1;
			$this->retCode=1;
			$this->msg = '用户名已存在，请重新注册';
		}
		mysqli_close($this->conn);
		$ret = array(
			'retCode' => $this->retCode, 
			'errCode' => $this->errCode,
			'msg' => $this->msg,
			"data"=>$data
		);
		echo json_encode($ret, JSON_UNESCAPED_UNICODE);
	}
}
	$model = $_REQUEST["c"];
	$fun = $_REQUEST["m"];
	$obj = new $model();
	$obj->$fun();
?>
