<?php

if (isset($_POST['submit'])) {
	
include_once 'dbconn.php';
session_start();

} else {

	header("Location: index.php?error=submit");
}

if($_SERVER['REQUEST_METHOD']== "POST"){

$email = $_POST['user'];
$pwd = $_POST['pwd']; 


$qry = "SELECT uid FROM tb_users where email = '$email' and pwd = '$pwd'";

$result = mysqli_query($con, $qry);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//$active = $row['active'];

$resultCheck = mysqli_num_rows($result);
if ($resultCheck == 1) {

//session_register('username');
$_SESSION['login_user'] = $email;

header("Location: welcome.php");
	
} else {
	header("Location: login.php?error=invalid");
	session_destroy();	

 }

}


//}



//$stmt->bind_param('s,s', $email, $pwd);

//$result = $con->query($stmt);

//$stmt->execute();

/*if ($result->num_rows = 0) {
	header('Location: index.php?error=invalid');
	exit();
}*/

?>