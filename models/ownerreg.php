<?php

require("mysql_login.php");

$name = mysql_real_escape_string($_POST['ownerName']);
$number = mysql_real_escape_string($_POST['ownerNumber']);
$company = mysql_real_escape_string($_POST['companyName']);
$description = mysql_real_escape_string($_POST['companyDescription']);
$email = mysql_real_escape_string($_POST['enterEmail']);
$password = md5($_POST['createPassword']);

$query = "INSERT INTO restaurant VALUES ('','$company','','$description','','')";

if(!mysql_query($query)) die("Error: ".mysql_error());

$result = mysql_query("SELECT * FROM restaurant WHERE name='$company' AND cuisine='$description' LIMIT 1");
$row = mysql_fetch_array($result);

$id = $row['id'];

$query = "INSERT INTO storeOwner VALUES ('','$name','$email','$id','$number')";

if(!mysql_query($query)) die("Error: ".mysql_error());

$query = "INSERT INTO user VALUES ('','$email','$password','$name','','','')";

if(!mysql_query($query)) die("Error: ".mysql_error());

header("location:../success.html");
