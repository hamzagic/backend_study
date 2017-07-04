<?php
include_once 'dbconn.php';

if (isset($_POST['submit'])) {
	

$event = mysqli_real_escape_string($con, $_POST['event']);
$date = mysqli_real_escape_string($con, $_POST['date']);
$errors = "";
$success = "";
$message = "";

if ($event == "") {
	$errors .= "<p>Event field is required</p>";
	//return false;
   }

   if ($date == "") {
	$errors .= "<p>Date field is required</p>";
	//return false;
   }

$query = "INSERT INTO tb_events (eventt, dates) VALUES ('$event', '$date')";
 




if (mysqli_query($con, $query)) {
	$success = "<p>Your event was successfully created.</p>";
	//return true;
}

  if ($errors != "") {
  	$message = "<p>The following errors occurred: </p>". $errors;
  }





/*$stmt = $con->prepare("INSERT INTO tb_events (eventt, dates) VALUES (?,?)");

//collecting the values
	
$stmt->bind_param("ss", $event, $date);

$event = $_POST ['event'];
$date = $_POST ['date'];

//sending the query

$stmt->execute();

if ($stmt->execute()) {

	echo "Cadastro realizado com sucesso!";
  }*/
}



?>