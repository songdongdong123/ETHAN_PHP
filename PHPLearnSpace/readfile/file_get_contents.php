<?php
		header("Content-type:text/html;charset=utf-8");
		$content = fopen("./test.txt", "r") or die("Unable to open file!");
		echo fread($myfile,filesize("./test.txt"));
		fclose($myfile);
		// echo 'sss';
?>