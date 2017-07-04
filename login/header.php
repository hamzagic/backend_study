<html>

<head>

<title>Login Page</title>
<link rel="stylesheet" type="text/css" href="style.css">
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
						<form action="login.php" method="post">
							<input type="text" name="user" placeholder="Username/Email">
							<input type="password" name="pwd" placeholder="Password">
							<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign Up</a>
					</div>
				</ul>

		</nav>

	</header>