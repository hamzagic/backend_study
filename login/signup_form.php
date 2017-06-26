<?php

include_once 'dbconn.php';

$stmt = $con->prepare("INSERT INTO tb_users (first, last, username, email, pwd) VALUES (?,?,?,?,?)");

$stmt->bind_param('s,s,s,s,s', $first, $last, $username, $email, $pwd);

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

$stmt->execute();


?>