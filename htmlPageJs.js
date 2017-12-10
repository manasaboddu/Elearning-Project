//Created by Project Group:7
//This javascript file is for "HTML page"

//declaring and initializing image array and quotes array.
var imgArray=["htmlIntro.png","html_structure.jpg","heading_4.jpg","form_1tag.jpg","anchor_1.png"];
var quotesArray=[
	"What is HTML? HTML-Hyper Text Markup Language.It describes the structure of a webpage using markups.It is the most baisc building block of the web. The HTML elements are reprersented by its tags. HTML elements are the baisc building blocks of the web. HTML tags label pieces of content such as 'heading', 'paragraph', 'table', and so on.Web pages can be created and modified by using professional HTML editors but for learning HTML we recommend a simple text editor like Notepad or TextEdit.We believe using a simple text editor is a good way to learn HTML.", 
	"An HTML document should start with a document type declaration: &lt!DOCTYPE html&gt.HTML contains head and body section.The head contains 'title','meta' elements.The &lthead&gt element is a container for metadata. HTML metadata is data about the HTML document. Metadata is not displayed.The body contains the data which is the visible on the content of the page.&lthtml&gt element defines the whole document.An HTML element consists of a start tag and end tag.Do not forget the end tag. Some HTML elements will display correctly, even if you forget the end tag. HTML elements can be nested.All HTML documents consist of nested HTML elements.",
	"HTML tags are element names surrounded by angle brackets.'Headings' are defined with h1 to h6 tags.'h1' is the most important heading and 'h6' is the least important heading.Search engines use the headings to index the structure and content of your web pages.Users skim your pages by its headings. It is important to use headings to show the document structure.&lth1&gt headings should be used for main headings, followed by &lth2&gt headings, then the less important &lth3&gt, and so on.Use HTML headings for headings only. Don't use headings to make text BIG or bold.",
	"The HTML &ltform&gt element defines a form that is used to collect user input.An HTML form contains form elements.Form elements are different types of input elements, like text fields, checkboxes, radio buttons, submit buttons, and more.The &ltinput&gt element is the most important form element.The &ltinput&gt element can be displayed in several ways, depending on the type attribute.&ltinput type='text'&gt defines a one-line input field for text input.&ltinput type='radio'&gt defines a radio button.Radio buttons let a user select one of a limited number of choices.&ltinput type='submit'&gt defines a button for submitting the form data to a form-handler.The action attribute defines the action to be performed when the form is submitted.The method attribute specifies the HTTP method (GET or POST) to be used when submitting the form data.Each input field must have a name attribute to be submitted.If the name attribute is omitted, the data of that input field will not be sent at all.",
	"The &lta&gt tag defines a hyperlink, which is used to link from one page to another.The most important attribute of the &lta&gt element is the href attribute, which indicates the link's destination.href specifies the URL of the page the link goes to.The attribute &lttarget&gt specifies where to open the linked document.The attribute &lttype&gt specifies the media type of the linked document"];
var i=0;//variable for index of imagearray
var j=0;//variable for index of quotesArray 
var timerId=0;//variable timer Id to use in clearInterval function.

function start(){
	//creating eventlisteners for startSlideShow and startSlideShow events.
	document.getElementById("startSlideShow").addEventListener("click",startSlideShowF,false);
	document.getElementById("stopSlideShow").addEventListener("click",stopSlideShowF,false);
	
}//end of start function

function startSlideShowF(){
	//using setInterval function to display images and corresponding description from arrays.
	timerId=setInterval(function(){
							//using src property of image to assign images.
							document.getElementById("img1").src=imgArray[i];
							i++;
							//setting i=0, repeats the images from the beginning of the array once all the images in it are displayed.
							if(i==imgArray.length) i=0;
							//using href attribute of anchor element to link the "more html information page" dynamically.
							document.getElementById("moreInfo").href="html_textexplanation.html";
							document.getElementById("resultDesc").innerHTML=quotesArray[j];
							j++;
							//setting j=0, repeats the description from the beginning of the array once all the elements are displayed.
							if(j==quotesArray.length) j=0;

						},2000);
						//2000 is the interval in number of milliseconds.
	
}//end of startSlideShowF function

function stopSlideShowF(){
	//calling clearInterval to pause or clear the slideshow 
	clearInterval(timerId);

}//end of stopSlideShowF

//adding eventlistener for page load event.
window.addEventListener("load",start,false);