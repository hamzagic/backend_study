<?php
include_once 'header.php';
?>

	<section class="main-container">

		<div class="main-wrapper"><h2>Sign Up</h2></div>
		<form class="signup-form" action="signup_form.php" method="post">
							<input type="text" name="first" placeholder="First Name">
							<input type="text" name="last" placeholder="Last Name">
							<input type="text" name="username" placeholder="Choose a Username">
							<input type="email" name="email" placeholder="E-mail">
							<input type="password" name="pwd" placeholder="Choose a Password">
							<input type="password" name="pwd2" placeholder="Confirm the Password">
							<button type="submit" name="submit">Sign up</button>
						</form>

	</section>
	
	<div id="people"></div>



<div id="resp"></div>

<?php
include_once 'footer.php';
?>

