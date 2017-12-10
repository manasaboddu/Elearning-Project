<?php
	//Created by Group:7.
	//global variables for creating connection
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="registerform";
	
	$result;//stores the result of the query.
	//build Select query
	$FirstName=$_POST['FirstName'];
	$LastName=$_POST['LastName'];
	$PhoneNumber=$_POST['PhoneNumber'];
	$EmailAddress=$_POST['EmailAddress'];
	$Password=$_POST['Password'];
	
	//creating an sql query to insert values.
	$sql="INSERT INTO register (FirstName,LastName,PhoneNumber,EmailAddress,Password) VALUES ('$FirstName','$LastName','$PhoneNumber','$EmailAddress','$Password');";
	//establisting connection with the credentials.
	$connection=new mysqli($servername,$username,$password,$dbname);
	//error checking 
	if($connection->errno){
		("Connection failed: ".$connection->connect_error);//if connection faild. display an error message
		echo "DBMS connect failes-errno".$connection->errno.PHP_EOL;
		echo "";
		die ("DBMS connect failed-error:".$connection->error.PHP_EOL);
	}//end if
	try{
		if($connection->query($sql)){//send sql insert query
			echo "Registration Successful.";
			echo "<script>window.location.href='coursesPage.html';</script>";
			
		}else{
		//die
			throw new Exception("Registration Failed: ".$connection->error);
		}
	}catch(Exception $e){
		die("".$e->getMessage());//error handling
	}//end try catch.
	
	$connection->close();
	//closing connection
	
?>