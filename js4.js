//Created by Project Group:7

//storing the missing letters in different arrays for different words.
var arr1=["O","E"];
var arr2=["R","N"];
var arr3=["U","L"];
var arr4=["A","E"];

function start(){
	
		document.getElementById("check1").addEventListener("click",check1BtnF,false);//eventlistener for first word
		document.getElementById("check2").addEventListener("click",check2BtnF,false);//eventlistener for second word
		document.getElementById("check3").addEventListener("click",check3BtnF,false);//eventlistener for third word
		document.getElementById("check4").addEventListener("click",check4BtnF,false);//eventlistener for fiurth word
}//end of start function.

function check1BtnF(){
	//taking user input 
		var user1=document.getElementById("ltr11").value;
		var user2=document.getElementById("ltr12").value;
		//checking whether user entered a valid input and comparing the results.
		if(user1!=""){
			//storing the validated input into a new variable
			var val1=user1.toUpperCase();
			if(user2!=""){
				var val2=user2.toUpperCase();//converting to uppercase letter.
				if(val1==arr1[0]){//comparing using if else statements 
					if(val2==arr1[1]){
						document.getElementById("r1").innerHTML="Correct Guess";
					}else{
					document.getElementById("r1").innerHTML="Incorrect Guess.Please Try Again";
					}
				}else{
				document.getElementById("r1").innerHTML="Incorrect Guess.Please Try Again";
				}
			}else{
			document.getElementById("r1").innerHTML="Enter a Valid input";
			}
		}else{
			document.getElementById("r1").innerHTML="Enter a Valid input";
		}//end of is else
		
		
		
	
}//end function check1BtnF
	
function check2BtnF(){
	//taking user input for second word.
		var user1=document.getElementById("ltr21").value;
		var user2=document.getElementById("ltr22").value;
		//checking whether user entered a valid input and comparing the results.
		if(user1!=""){
			var val1=user1.toUpperCase();
			if(user2!=""){
				var val2=user2.toUpperCase();
				if(val1==arr2[0]){//comparing suing if else
					if(val2==arr2[1]){
						document.getElementById("r2").innerHTML="Correct Guess";
					}else{
					document.getElementById("r2").innerHTML="Incorrect Guess.Please Try Again";
					}
				}else{
				document.getElementById("r2").innerHTML="Incorrect Guess.Please Try Again";
				}
			}else{
			document.getElementById("r2").innerHTML="Enter a Valid input";
			}
		}else{
			document.getElementById("r2").innerHTML="Enter a Valid input";
		}//end of if else
			
	
} //end function check2BtnF 

function check3BtnF(){
		//taking user input for word-three
		var user1=document.getElementById("ltr31").value;
		var user2=document.getElementById("ltr32").value;
		//checking whether user entered a valid input and comparing the results.
		if(user1!=""){
			var val1=user1.toUpperCase();
			if(user2!=""){
				var val2=user2.toUpperCase();
				if(val1==arr3[0]){//using if -else for comparing.
					if(val2==arr3[1]){
						document.getElementById("r3").innerHTML="Correct Guess";
					}else{
					document.getElementById("r3").innerHTML="Incorrect Guess.Please Try Again";
					}
				}else{
				document.getElementById("r3").innerHTML="Incorrect Guess.Please Try Again";
		
				}
			}else{
			document.getElementById("r3").innerHTML="Enter a Valid input";
			}
		}else{
			document.getElementById("r3").innerHTML="Enter a Valid input";
		}
		//end of if else
		
} //end function check3BtnF 

function check4BtnF(){
		//user input variables 
		var user1=document.getElementById("ltr41").value;
		var user2=document.getElementById("ltr42").value;
		//checking whether user entered a valid input and comparing the results.
		if(user1!=""){
			var val1=user1.toUpperCase();
			if(user2!=""){
				var val2=user2.toUpperCase();
				if(val1==arr4[0]){//using if-else for comparision.
					if(val2==arr4[1]){
						document.getElementById("r4").innerHTML="Correct Guess";
					}else{
					document.getElementById("r4").innerHTML="Incorrect Guess.Please Try Again";
					}
				}else{
				document.getElementById("r4").innerHTML="Incorrect Guess.Please Try Again";
		
				}
			}else{
			document.getElementById("r4").innerHTML="Enter a Valid input";
			}
		}else{
			document.getElementById("r4").innerHTML="Enter a Valid input";
		}
		//end of if else
	
} //end function check4BtnF 

window.addEventListener("load",start,false);