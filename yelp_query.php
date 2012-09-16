<?php

require("models/mysql_login.php");

$name = $_GET['name'];
$phone = $_GET['phone'];
$zip = $_GET['zip'];

$query = "SELECT * FROM restaurant WHERE name LIKE '$name' OR phone='$phone' LIMIT 1";

$result = mysql_query($query);

$num = mysql_num_rows($result);

if($num > 0){
	$row = mysql_fetch_array($result);
	$id = $row['id'];
	header("location:menu_view.php?id=".$id);
}
else header("location:menu/menu.html");