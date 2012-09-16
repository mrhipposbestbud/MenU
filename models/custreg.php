<?php

require("mysql_login.php");

$name = mysql_real_escape_string($_POST['customerName']);
$email = mysql_real_escape_string($_POST['customerEmail']);
$description = mysql_real_escape_string($_POST['customerDescription']);
$password = md5($_POST['createPassword']);

$query = "INSERT INTO user VALUES ('','$email','$password','$name','','$description','')";

if(!mysql_query($query)) die("Error: ".mysql_error());

header("location:../success.html");