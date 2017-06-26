<?php

if (isset($_POST['submit'])) {
	include_once 'dbconn.php';


$stmt = $con->prepare("INSERT INTO tb_users (fname, lname, username, email, pwd) VALUES (?,?,?,?,?)");

$stmt->bind_param("sssss", $first, $last, $username, $email, $hashedPwd);

$first = $_POST['first'];
$last = $_POST['last'];
$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

//check empty fields
if (empty($first) || empty($last) || empty($username) || empty($email) || empty($pwd)) {
	header("Location: signup.php?error=empty");	
	exit();

 }/*elseif (ctype_space($first) || (ctype_space($last) || (ctype_space($username) || (ctype_space($email) || (ctype_space($pwd)) {
		header("Location: signup.php?error=blankspaces");	
	    exit();
	    }  elseif (!preg_match("/^[a-zA-Z]*$/", $first || !preg_match("/^[a-zA-Z]*$/", $last)) {
	    		header("Location: signup.php?error=invalid");	
	            exit();*/
	    	 else {

	    	 		$sql = "SELECT * FROM tb_users WHERE username = '$username'";
	    	 		$result = mysqli_query($con, $sql);
	    	 		$resultCheck = mysqli_num_rows($result);

	    	 			if ($resultCheck > 0) {
	    	 				header("Location: signup.php?error=usernametaken");	
	           				exit();
	    	 			}

	    			
	    	

	    
//finally making the query
$stmt->execute();
header("Location: index.php?successfully_signed_up");
	}
}	    
	
else {
	header("Location: signup.php");
	exit();
}




//header('Location: signup.php');






?>