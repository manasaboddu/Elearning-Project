<!DOCTYPE html>
<!--
Created by Group:7
Form to query, compare results from query and print the quiz results and score-->
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Simple Database query</title>
		<link rel="stylesheet" type="text/css" href="frontPage.css"/>
		<style type="text/css">
			body{
				background: url("php_img2.jpg");
				background-repeat: repeat-y; 
				background-size: 100%;
			}
			.zoom {
				padding-left: 500px;
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
		<h3 style="text-align:center;color:Red;">Test Your Knowledge</h3>
		<form action="quiz.php" method="post">
			<div><b>1).HTML stands for</b></div><br/>
			<input type="radio" value="A.Hyper Text Markup Language" name="qus1" required/><label>A.Hyper Text Markup Language</label>
			<input type="radio" value="B.Hyper Tool Markup Language" name="qus1" required/><label>B.Hyper Tool Markup Language</label>
			<input type="radio" value="C.Home Text Markup Language" name="qus1" required/><label>C.Home Text Markup Language</label>
			<input type="radio" value="D.Hyperlinks Text Markup Language" name="qus1"required/><label>D.Hyperlinks Text Markup Language</label><br/>
			<br/>
			
			<div><b>2).PHP stands for</b></div><br/>
			<input type="radio" value="A.Personnel Home Page" name="qus2"required/><label>A.Personnel Home Page</label>
			<input type="radio" value="B.PreProcessor Home Page" name="qus2" required/><label>B.PreProcessor Home Page</label>
			<input type="radio" value="C.Hyper Text PreProcessor" name="qus2"required/><label>C.Hyper Text PreProcessor</label>
			<input type="radio" value="D.None of the above" name="qus2"required/><label>D.None of the above</label><br/>
			<br/>
			
			<div><b>3).CSS stands for</b></div><br/>
			<input type="radio" value="A.Creating Style Sheets" name="qus3" required/><label>A.Creating Style Sheets</label>
			<input type="radio" value="B.Cascading Style Sheets" name="qus3" required/><label>B.Cascading Style Sheets</label>
			<input type="radio" value="C.Cascading Sheets Styles" name="qus3" required/><label>C.Cascading Sheets Styles</label>
			<input type="radio" value="D.None of the above" name="qus3" required/><label>D.None of the above</label><br/>
			<br/>
			
			<div><b>4).Javascript is used for</b></div><br/>
			<input type="radio" value="A.Creating Style Sheets" name="qus4"required/><label>A.Creating Style Sheets</label>
			<input type="radio" value="B.Creating database" name="qus4"required/><label>B.Creating database</label>
			<input type="radio" value="C.Creating dynamic and interactive webpages" name="qus4" required/><label>C.Creating dynamic and interactive webpages</label>
			<input type="radio" value="D.All of the above" name="qus4" required/><label>D.All of the above</label><br/>
			<br/>
			
			<div><b>5).DOM stands for</b></div><br/>
			<input type="radio" value="A.Document Object Model" name="qus5"required/><label>A.Document Object Model</label>
			<input type="radio" value="B.DOCTYPE Object Model" name="qus5"required/><label>B.DOCTYPE Object Model</label>
			<input type="radio" value="C.Document Oriented model" name="qus5" required/><label>C.Document Oriented model</label>
			<input type="radio" value="D.All of the above" name="qus5"required/><label>D.All of the above</label><br/>
			<br/>
			
			<p style="margin-left:500px;"><input type="submit" name="submitBtn" value="Submit" style="background-color:coral;color:black;"/></p>
			
		</form>
		<?php
			if(isset($_POST['submitBtn'])){
				include("inc_quiz_conn.php");//including the page.
			}//end of if statement
		?>
		<div class = "zoom"> 
			<a href="htmlPage.html"><img src="html-5.png" alt="HTML-5" style="width:50px;height:50px" hspace="1" ></a> 
			<a href="cssMainPage.html"><img src="css3.png" alt="CSS-3" style="width:50px;height:50px" hspace="1"></a>
			<a href="JavaScript_course.html"><img src="javascript-icon.png" alt="JavaScript" style="width:50px;height:50px" hspace="1"></a>
			<a href="quiz.php"><img src="php-icon.png" alt="SQL" style="width:50px;height:50px" hspace="1"></a>
		</div>
	</body>
	
</html>