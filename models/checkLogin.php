<?php

require("mysql_login.php");

$email = $_POST['inputEmail'];
$password = md5($_POST['inputPassword']);

$query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
$result = mysql_query($query);

$num = mysql_num_rows($result);

if($num == 1){
	setcookie("_menume_session",md5($email),time()+3600);
	header("location:../maps/hero.html");
}
else die("Unable to locate user, process has been killed. ".mysql_error());