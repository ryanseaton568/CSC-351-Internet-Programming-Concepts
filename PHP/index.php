<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8"/>
				<link rel="stylesheet" type="text/css" href="PHP Project.css">
				<title>Register for SFASU</title>
				<script src="register.js" type="text/javascript"></script>
		</head>
		<body>
		
		<section class="page-section register">
				<div class="container">
				<h1 id = "titleID"> Register for Soccer Try-outs!</h1>
				
				<form method="post" action="register.php" id="registration-form">
				
				<div class="field">
						<label for="FirstName"></label>
						<input type="text" id="FirstName" name="FirstName" placeholder="First Name" required="required" autofocus="autofocus" />
				</div>
				<br>
				<div class="field">
						<label for="LastName"></label>
						<input type="text" id="LastName" name="LastName" placeholder="Last Name" required="required" />
				</div>
				<br>
				<div class="field">
						<label for="Age"></label>
						<input type="number" min="0" max="99" id="Age" name="Age" placeholder="Age" required="required" autofocus="autofocus" />
				</div>
				<br>
				<div class="field">
						<label for="EmailAddress"></label>
						<input type="email" id="EmailAddress" name="EmailAddress" placeholder="Email Address" required="required" />
				</div>
				<div>
						<button type="submit" id="submitButton">Register</button>
				</div>
				</form>
			</div>
		</section>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<div id = "information">
		<?php 
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['SERVER_ADDR'];
		?>
		</div>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p>
		<br>
		<br>
		<br>
		<br>
		<br>
		<p>
		</body>
<html>