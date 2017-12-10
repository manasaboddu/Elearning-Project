<?php
	//globalvariables for creating connection.
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="quiz";
	
	//declaring an empty array.
	$arr1=array();
	$i=0;
	//declaring variables to store the input from the form using $_POST global variable.
	$Question1=$_POST['qus1'];
	$Question2=$_POST['qus2'];
	$Question3=$_POST['qus3'];
	$Question4=$_POST['qus4'];
	$Question5=$_POST['qus5'];
	
	$score=0;//declaring score to 0, to keep score of the quiz.
	
	$result;//declaring result variable to hold the results 
	//building a sql query to select Answer records from the quiztable
	$sql="select Answer from quiztable;";
	
	//establishing connection 
	$connection=new mysqli($servername,$username,$password,$dbname);
	//check connection
	if($connection->errno){
		("Connection failed: ".$connection->connect_error);//if connection faild. display an error message
		echo "DBMS connect failes-errno".$connection->errno.PHP_EOL;
		echo "";
		die ("DBMS connect failed-error:".$connection->error.PHP_EOL);
	}//end if
	try{
		if(!($result=$connection->query($sql))){
			//send the sql 
			throw new Exception("Select Query Failed".$connection->error);
		}
		
	}catch(Exception $e){
		die("Error:".$e->getMessage());//error handling
		
	}//end of try catch
	$connection->close();//connection closed.
?>



<?php
	while($row=$result->fetch_assoc()){
	
		foreach($row as $value){
				global $arr1;
				$arr1[$i]=$value;
				$i++;
				
		}
	}//end of while
	echo "<p><b>Your Results:</b></p>";
	echo "<br/>";
	 //comparing and printing the correct or wrong answer using if else statement.
	if ($Question1 == $arr1[0]){
		print "1.Correct Answer";
		echo "<br/>";
		$score++;
	}else{
		print "1.Wrong Answer";
		echo "<br/>";
	}//end of if for qus1
				
	if ($Question2 == $arr1[1]){
		print "2.Correct Answer";
		echo "<br/>";
		$score++;
	}else{
		print "2.Wrong Answer";
		echo "<br/>";
	}//end of if for qus2  
	if ($Question3 == $arr1[2]){
		print "3.Correct Answer";
		echo "<br/>";
		$score++;
	}else{
		print "3.Wrong Answer";
		echo "<br/>";
	} //end of if for qus3  
				
	if ($Question4 == $arr1[3]){
		print "4.Correct Answer";
		echo "<br/>";
		$score++;
	}
	else{
		print "4.Wrong Answer";
		echo "<br/>";
	}//end of if for qus4
	
	if ($Question5 == $arr1[4]){
		print "5.Correct Answer";
		echo "<br/>";
		$score++;
	}else{
		print "5.Wrong Answer";
		echo "<br/>";
	}//end of if for qus5   	
	//printing score
	echo "<p><b><i>Your score is</i> $score</b></p>";

?>
