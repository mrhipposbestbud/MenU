<?php

require("mysql_login.php");

$category = $_POST['category'];
$data = array("category" => $category, "data" => array());

$s = count($_POST['itemname']);

for($i=0;$i<$s;$i++){
	$data['data'][$i]['itemname'] = $_POST['itemname'][$i];
	$data['data'][$i]['veg'] = $_POST['veg'][$i];			
	$data['data'][$i]['description'] = $_POST['descript'][$i];			
	$data['data'][$i]['price'] = $_POST['price'][$i];			
	$data['data'][$i]['allergyd'] = $_POST['allergyd'][$i];			
	$data['data'][$i]['allergyn'] = $_POST['allergyn'][$i];			
	$data['data'][$i]['allergyf'] = $_POST['allergyf'][$i];			
	$data['data'][$i]['allergycw'] = $_POST['allergycw'][$i];
}

$json = json_encode($data);

$query = "INSERT INTO menuId VALUES ('','$json','1','Menu A')";
if(!mysql_query($query)) die("Something got broken. ".mysql_error());

header("location:../create-menu.html"); 