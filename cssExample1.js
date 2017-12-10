//This Javascript page is for "CSS example1".
//Created by Project Group:7

//creating an array to store colors.
var bgColor=["lightcyan","darkOrange","cornSilk"];
//initializing index to 0.
var i=0;

function startcolor(){
	//creating event listeners for all the events.
	document.getElementById("redColor").addEventListener("click",redPage,false);
	document.getElementById("blueColor").addEventListener("click",bluePage,false);
	document.getElementById("limeColor").addEventListener("click",greenPage,false);
	document.getElementById("stop").addEventListener("click",clearCSS,false);
	
	
}//end of startcolor function


function redPage(){
	document.getElementById("changeHeading").style.color="orangeRed";
	document.getElementById("changeHeading").style.fontSize="40px";
	document.body.style.backgroundColor=bgColor[0];
	i++;
	if(i==bgColor.length-1) i=0;
}//end of redPage

function bluePage(){
	document.getElementById("changeHeading").style.color="navy";
	document.getElementById("changeHeading").style.fontSize="20px";
	document.body.style.backgroundColor=bgColor[1];
	i++;
	if(i==bgColor.length-1) i=0;
}//end of bluePage

function greenPage(){
	document.getElementById("changeHeading").style.color="lime";
	document.getElementById("changeHeading").style.fontSize="10px";
	document.body.style.backgroundColor=bgColor[2];
	i++;
	if(i==bgColor.length-1) i=0;
}//end of greenPage

//function to clear the text color
function clearCSS() {
	document.body.style.backgroundColor='';
	document.getElementById("changeHeading").style.color="crimson";
	document.getElementById("changeHeading").style.fontSize="";
	}//end clearCSS


//adding eventlistener for page load event.
window.addEventListener("load",startcolor,false);