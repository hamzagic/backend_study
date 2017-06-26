<?php

$server="localhost";
$db="users";
$admin="root";
$pass="kaspa";
$arr = [];

$con = new mysqli ($server, $admin, $pass, $db);

if ($con->connect_error) {
	echo "Error: ".$con->connect_error;
	$arr['Error'] = true;
	$arr['ErrorMsg'] = $con->connect_error;
} else {
	$arr['Connection'] = true;
}

?>