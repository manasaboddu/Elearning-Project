
//This page is for "more information on html".
//Created by Project Group:7

//declaring variables to hold user input of four sides of a quadrilateral.		
var i1;
var i2;
var i3;
var i4;

//declaring and initializing variables to hold the validated input.
var v1=0;var v2=0; var v3=0; var v4=0;

//declaring an empty array
var array1=[];

function start(){
	//creating event listeners for submit and reset events.
	document.getElementById("submit").addEventListener("click",rhombusChecker,false);
	//using reload method of location object to reload the page.
	document.getElementById("reset").addEventListener("click",function(){location.reload();},false);
	
}//end of function start

function rhombusChecker(){
	//using getElementsByName, accessing the user input and assiging the validated input to variables.
	
	i1=document.getElementsByName("number")[0].value;
	if(v1=parseInt(i1)){		
		i2=document.getElementsByName("number")[1].value;
		if(v2=parseInt(i2)){
			i3=document.getElementsByName("number")[2].value;	
			if(v3=parseInt(i3)){
				i4=document.getElementsByName("number")[3].value;	
				if(v4=parseInt(i4)){
				//if all the user input is valid, then using nested if-else statements to find whether all the sides are equal or not and 
				//displaying whether the sides form a Rhombus or not.
					if(v1==v2){
						if(v1==v3){
							if(v1==v4){
										
								document.getElementById("result").innerHTML="Its a rhombus!!!";
								document.getElementById("explanation").innerHTML="As you entered all the sides same, it made a rhombus."+"\nside1: "+i1+"\nside2: "+i2+"\nside3: "+i3+"\nside4: "+i4+"\r\n"+"\r\n\nHere we have used \"Javascript\" to implement this function."+
											"\r\nWe have used \"getElementsByName\",a menthod of 'document' object of \"BOM-Browser Object Model\" to take input from the user."+
											"\r\nThe getElementsByName returns a collection of elements which is similar to an array, hence we can be use the index property to refer each element of the collection."+
											"\r\nWe have validated the user input using 'parseInt()' method of javascript"+"\r\nWe have used 'nested if' conditional operators to compare the sides and declare whether the sides entered form a rhombus or not."+
											"\r\nwe have displayed the message using the 'getElementById' property of Javscript,which writes the result into the specified id using 'write()' method of document object.";
							}
						}
					}else{
						document.getElementById("result").innerHTML="Its not a rhombus";
						document.getElementById("explanation").innerHTML="The sides you entered are not equal"+"\nside1: "+i1+"\nside2: "+i2+"\nside3: "+i3+"\nside4: "+i4+"\r\nHence it doesnot form a Rhombus!!"+"\r\n\nHere we have used \"Javascript\" to implement this function."+
									"\r\nWe have used \"getElementsByName\",a menthod of 'document' object of \"BOM-Browser Object Model\" to take input from the user."+
									"\r\nThe getElementsByName returns a collection of elements which is similar to an array, hence we can be use the index property to refer each element of the collection."+
									"\r\nWe have validated the user input using 'parseInt()' method of javascript"+"\r\nWe have used 'nested if' conditional operators to compare the sides and declare whether the sides entered form a rhombus or not."+
									"\r\nwe have displayed the message using the 'getElementById' property of Javscript,which writes the result into the specified id using 'write()' method of document object.";
		
					}//end of else
			
				}else{
				document.getElementById("result").innerHTML="invalid input4";
				}//end of else
			}//end of if 
			else{
				document.getElementById("result").innerHTML="invalid input3";
			}
		}else{
		document.getElementById("result").innerHTML="invalid input2";	
		}
	}else{
	document.getElementById("result").innerHTML="invalid input1";		
	}
	

}//end of rhombusChecker function 

//adding eventlistener for page load event.
window.addEventListener("load",start,false);	
	
