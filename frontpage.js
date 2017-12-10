//Created by Group 7

//creating an array with elements
var array=["Acquire New Skills.", "Advance Your Career.","Expand Your Mind.", "Create Your Own Website.","","WELCOME TO LEARN TECH ONLINE"];

//creating variables
var timerId=0;
var i=0;

function start(){
	setTimer();
}//end function start


//calling the setTimer function to display the quotes one after the other.
function setTimer(){
	timerId=setInterval(function(){
		if(i<array.length){
			document.getElementById("quotes").innerHTML+=array[i]+"<br/>";
			i++;
		}
	},2000);
}//end of setTimer

//creating a page load event
window.addEventListener("load",start,false);
