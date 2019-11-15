<?php
		header("Content-type:text/html;charset=utf-8");
		// 判断是否支持mysql
		if (function_exists('mysqli_connect')) {
      echo 'Mysql扩展已经安装';
	  } else {
	  	echo "不支持";
	  }
?>