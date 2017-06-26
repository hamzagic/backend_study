<?php

include_once 'dbconn.php';

//$stmt = $con->prepare("INSERT INTO tb_users (email, pwd) VALUES (?,?)");

//$stmt->bind_param('s,s', $email, $pwd);

$email = $_POST['user'];
$pwd = $_POST['pwd'];

if ($email) {
	# code...
}

?>