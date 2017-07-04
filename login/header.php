<html>

<head>

<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<!--<script type="text/javascript" src="json.js"></script>
<script type="text/javascript" src="obj.js"></script>-->
</head>
<body>

	<header>

		<nav>
			<div class="main-wrapper"></div>
				<ul>
					<li class="home"><a href = "login.php">Home</a></li>
					<div class="nav-login">
						<form action="login.php" method="post" name="form">
							<input type="text" name="user" placeholder="Username/Email" id="user">
							<input type="password" name="pwd" placeholder="Password" id="pwd">
							<button type="submit" name="submit" id="submit">Login</button>
						</form>
						<a href="signup.php">Sign Up</a>
					</div>
				</ul>

		</nav>
		<script type="text/javascript" src="scripts/login.js"></script>
	</header>