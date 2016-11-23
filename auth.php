<?php session_start();
	include("conn.php");
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$sql = "SELECT * FROM login where user='{$user}'";
	$que = mysql_query($sql);
	if (mysql_num_rows($que)==1) {
		$dataLoginDB = mysql_fetch_array($que);
		if ($pass == $dataLoginDB['pass']) {
			$_SESSION['user'] = $dataLoginDB;
			header("Location:index.php");
		} else{
			header("Location:login.php");
		}
	}else{
			header("Location:login.php");
	}
?>