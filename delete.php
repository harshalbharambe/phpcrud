<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["id"])) {
	$result = mysql_query("DELETE FROM toy WHERE id=".$_GET["id"]);
	if(!empty($result)){
		header("Location:index.php");
	}
}
?>