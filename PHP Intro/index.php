<!DOCTYPE html>
<html lang="en">
		<head>
				<meta charset="utf-8"/>
				<link rel="stylesheet" type="text/css" href="PHP Project.css">
				<title>Joseph Seaton</title>
				<script src="PHP Project.js" type="text/javascript"></script>
		</head>
		<body>
		
		<section class="page-section register">
				<div class="container">
				<h1 id = "titleID"> Register for Soccer Try-outs!</h1>
				
				<form method="post" action="register.php" onsubmit="return checkForm()" id="registration-form">
				
				<div class="field">
						<label for="FirstName"></label>
						<input type="text" id="FirstName" name="FirstName" placeholder="First Name" required="required" autofocus="autofocus" />
				</div>
				<div id="error1">Invalid First Name</div>
				<br>
				
				<div class="field">
						<label for="LastName"></label>
						<input type="text" id="LastName" name="LastName" placeholder="Last Name" required="required" />
				</div>
				<div id="error2">Invalid Last Name</div>
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
				<br>
				<div class="field"
				<table>
				<tr>
				<td>Would You Like To Join Our Mailing List:</td>
				<br>
                        <td>
                            <input type="radio" id="Maillist" name="MailList" value="Yes">Yes
                            <input type="radio" id="Maillist" name="MailList" value="No" checked>No
							<input type="radio" id="Maillist" name="MailList" value="Snail Mail">Snail Mail<br/>
                        </td>
				</tr>

					<tr>
                        <td>Who is Your Favorite Superhero:</td>
                        <td>
                            <select id="FavoriteSuperHero" name="FavoriteSuperHero">
                                <option value="Batman">Batman</option>
								<option value="Iron Man">Iron Man</option>
								<option value="Spiderman">Spiderman</option>
                                <option value="Superman">Superman</option>
                                <option value="Wonder Woman">Wonder Woman</option>
								<option value="None">None</option>
                            </select>
                        </td>                    
                    </tr>
				</table>
				<div>
						<button type="submit" id="submitButton">Register</button>
				</div>
				</div>
				</form>
			</div>
			
			
		</section>
		<br/>
		<div id = "information">
		<?php 
		echo $_SERVER['HTTP_USER_AGENT'];
		echo "<br>";
		echo $_SERVER['SERVER_NAME'];
		echo "<br>";
		echo $_SERVER['SERVER_ADDR'];
		?>
		</div>	
		</body>
<html>