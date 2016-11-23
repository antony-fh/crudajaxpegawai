<?php

	$conn=mysql_connect("139.59.226.31", "cendana","cendananr2425");
	mysql_select_db('cendana_tony_cendanacrud',$conn);
if($_SESSION['user']==""){
    header("Location:login.php");
}
?>