<?php
include_once 'header.php';
setcookie("name", "not_logged", time()+1530157858, "/", 0);

session_start();
//include_once 'logout.php';
?>

	<section class="main-container">

		<div class="main-wrapper"><h2>Home</h2></div>

	</section>
	
	<div id="people"></div>



<div id="resp">

<?php 

if (!isset($_SESSION['logged'])) {
	echo "Not logged in";
}
	
//}
?>

</div>

<?php
include_once 'footer.php';
?>

