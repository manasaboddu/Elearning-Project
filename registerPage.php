<!DOCTYPE html>
<!--//Created by Project Group:7
 This register Page helps the user to register giving the valid information-->

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Register Form</title>
		<link rel="stylesheet" type="text/css" href="frontPage.css"/>
		<style>
			#registerFont {
					font-family: "Comic Sans MS", cursive, sans-serif;
			}
			
			body {
					background: url("register.jpg");
					background-repeat: repeat-y;
					background-size: 100%;
					margin-top: 25px;
					margin-bottom: 25px;
					margin-left: 25px;
					margin-right: 25px;
					vertical-align: bottom;
					text-align: bottom;
			}

			#registerFont1 {
					padding-top: 0px;
					font-weight: bold;
			}

			#register {
					display: inline-block;
					float: left;
			}
			
			#benefit {
					display: inline-block;
					float: right;
					padding-right:600px;
					padding-top: 150px;
			}

			#registerButton {
					background-color: white;
					color: black;
					border: 2px solid green; /* Green */
					border-radius: 4px;
					background-color: #4CAF50;
					font-family:"Comic Sans MS", cursive, sans-serif;
			}
			
			#cancelButton {
					background-color: white;
					color: black;
					border: 2px solid grey; 
					border-radius: 4px;
					background-color: grey;
					font-family:"Comic Sans MS", cursive, sans-serif;
			}
			
		</style>
	</head>
	<body>
	<div id="img">
			<img src="mainIcon.png">
		</div>
		<h1 style="text-align:center; font-family:Caflisch Script Pro, cursive">LEARN TECH ONLINE</h1>
		<nav> 
			<ul>
				<li><a href="frontPage.html">Home</a></li>
				<li><a href="coursesPage.html">Courses</a></li>
				<li><a href="registerPage.php">Register</a></li>
				<li><a href="contactUs.html">Contact Us</a></li>
			</ul>
		</nav>
		<div id="benefit">
			<b>Benifits with Learn Tech Online</b><br>
			<img src ="tick.jpg">Access classes 24/7</img><br>
			<img src ="tick.jpg">Study Anytime, Anywhere </img><br>
			<img src ="tick.jpg">Experience lessons the way you learn best</img><br>
			<img src ="tick.jpg">Support when you need it </img><br>
			<img src ="tick.jpg">Develop real-world skills</img><br>
			<img src ="tick.jpg">Self-paced learning</img><br>
			<img src ="tick.jpg">Improve your technical skills</img><br>
		</div>
		<div id="register">
			<form action="registerPage.php" name="registerForm" method = "POST">
				<p id ="registerFont"> It's time to try Learn Tech Online </p> <br>
				<p id = "registerFont1"> Create Your Learn Tech Account <br>
				 New to LearnTech? Sign up-It's free and simple </p> <br>
			<table>
				<tr><td>First Name</td><td><input type ="text" name="FirstName" required value="<?php if(isset($_POST['registerDetails'])) {echo $_POST['FirstName'];}?>"/></td></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr><td>Last Name</td><td><input type ="text" name="LastName" required value="<?php if(isset($_POST['registerDetails'])) {echo $_POST['LastName'];}?>"/></td></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr><td>Phone Number</td><td><input name="PhoneNumber" type = "tel" placeholder = "(###) ###-####" required value="<?php if(isset($_POST['registerDetails'])) {echo $_POST['PhoneNumber'];}?>"/></td></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr><td>Email Address</td><td><input type ="text" name="EmailAddress" placeholder="name@domain.com" required value="<?php if(isset($_POST['registerDetails'])) {echo $_POST['EmailAddress'];}?>"/></td></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr><td>Password</td><td><input type ="password" name="Password" required value="<?php if(isset($_POST['registerDetails'])) {echo $_POST['Password'];}?>"/></td></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr></tr>
				<tr><td colspan ="2" style = "text-align:right"><input type = "submit" value = "GetStarted" name = "registerDetails"></td>
				<td colspan ="2" style = "text-align:right"><input type = "submit" value = "Cancel" name = "cancelDetails"></td></tr>
				</table>
			</form>
		
		<?php
			//if submit button is set_error_handler
			if(isset($_POST['registerDetails'])){
				include('inc_validate.php');
					if(validateString($_POST['FirstName'])){
						$firstName=$_POST['FirstName'];
							if(validateString($_POST['LastName'])){
								$lastName=$_POST['LastName'];
									if(validatePhoneNumber($_POST['PhoneNumber'])){
										$phoneNumber=$_POST['PhoneNumber'];
											if(validateEmail($_POST['EmailAddress'])){
												$emailAddress=$_POST['EmailAddress'];
													if(validateAlphanumeric($_POST['Password'])){
														$password=$_POST['Password'];
														//include file to insert into database
													include('inc_insertForm.php');	
												}else{
													echo "Invalid Password.Your password should include only numerics and alphabets.";
												}//end of password
											}else{
												echo "Please enter a valid Email Address. ";
											}//end of emailaddress	
										}else{
											echo "Please enter a 10 digit phone number.";
										}//end of phonenumber	
									}else{
										echo "Invalid LastName";
									}//end of lastname
								}else{
									echo "Invalid FirstName";
								}//end of firstname	
			}//end if
		?>
		<?php
			if(isset($_POST['cancelDetails'])){
				echo "Please fill in the details to Register.";
				
			}
		?>
	</body>
</html>