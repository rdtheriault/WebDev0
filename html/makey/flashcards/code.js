//students will be told to select color/shape and will see the object/color pick and move on to next

//place holder for each card
var one = "";
var two = "";
var three = "";
var total = 0;//total in array
var now = 0;//holder for current array number
var mstrArry;//holds the array that is selected
var type = "";//holds the type of cards to be used

//edit arrays here (add/change)
var colors = ["red","#ff3300","yellow","blue","#8B0991","green","#663300","black","white","#ff0066","grey"];//["red","orange","yellow","blue","purple","green","brown","black","white","pink","grey"];
var shapes = ["image/square.png","image/rectangle.png","image/circle.png","image/oval.png","image/diamond.png","image/triangle.png","image/trapeziod.png","image/parallelogram.png","image/octagon.png","image/heart.png","image/star.png"];
var nums = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
var caps = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"];
var low = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
var fry1 = ["the","of","and","a","to","in","is","you","that","it"];
var fry2 = ["he","was","for","on","are","as","with","his","they","I"];
var fry3 = ["at","be","this","have","from","or","one","had","by","word"];
var fry4 = ["but","not","what","all","were","we","when","your","can","said"];
var fry5 = ["there","use","an","each","which","she","do","how","their","if"];
var fry6 = ["will","up","other","about","out","many","then","them","these","so"];
var fry7 = ["some","her","would","make","like","him","into","time","has","look"];
var fry8 = ["two","more","write","go","see","number","no","way","could","people"];
var fry9 = ["my","than","first","water","been","call","who","oil","now","find"];
var fry10 = ["long","down","day","did","get","come","made","may","part","over"];
var oneTOone10 = ["image/two.png","image/four.png","image/three.png","image/one.png","image/five.png","image/eight.png","image/ten.png","image/seven.png","image/nine.png","image/six.png"]
var oneTOone20 = ["image/two.png","image/four.png","image/three.png","image/one.png","image/five.png","image/eight.png","image/ten.png","image/seven.png","image/nine.png","image/six.png"]

//create listener to start app
document.getElementById("go").addEventListener("click",cards);
//create variables for functions to listen for card click and send aurguments (this allows them to be shut off later)
var list1 = function() { next(one,1); };
var list2 = function() { next(two,2); };
var list3 = function() { next(three,3); };

//main function that starts everything. update as needed for new decks.
function cards() {
	var task = document.getElementById("choose").value;
	document.getElementById("btn").style.display = "none"; 
  	if (task === "colors"){
    	setVars(colors);
      	color();
      	type = "color";
    }
    else if (task === "shapes"){
    	setVars(shapes);
      	image();
      	type = "image";
    }
  	else if (task === "nums"){
    	setVars(nums);
      	text();
      	type = "text";
    }
  	else if (task === "capLet"){
    	setVars(caps);
      	text();
      	type = "text";
    }
  	else if (task === "lowLet"){
    	setVars(low);
      	text();
      	type = "text";
    }
  	else if (task === "fry1"){
    	setVars(fry1);
      	text();
      	type = "text";
    }
  	else if (task === "fry2"){
    	setVars(fry2);
      	text();
      	type = "text";
    }
  	else if (task === "fry3"){
    	setVars(fry3);
      	text();
      	type = "text";
    }
  	else if (task === "fry4"){
    	setVars(fry4);
      	text();
      	type = "text";
    }
  	else if (task === "fry5"){
    	setVars(fry5);
      	text();
      	type = "text";
    }
  	else if (task === "fry6"){
    	setVars(fry6);
      	text();
      	type = "text";
    }
  	else if (task === "fry7"){
    	setVars(fry7);
      	text();
      	type = "text";
    }
  	else if (task === "fry8"){
    	setVars(fry8);
      	text();
      	type = "text";
    }	
  	else if (task === "fry9"){
    	setVars(fry9);
      	text();
      	type = "text";
    }
  	else if (task === "fry10"){
    	setVars(fry10);
      	text();
      	type = "text";
    }
  	else if (task === "oneTOone10"){
    	setVars(oneTOone10);
      	image();
      	type = "image";
    }
}

function next(choice,num) {
  	//remove listener to avoid over click	 
  	 changeClicks(0);
  
  	//if choice is correct make border green (based on choice number) else make purple
  	if (choice === mstrArry[now]){
      	if (num == 1) {document.getElementById("one").style.border = "5px solid green";}
      	else if (num == 2) {document.getElementById("two").style.border = "5px solid green";}
      	else if (num == 3) {document.getElementById("three").style.border = "5px solid green";}
    }
  	else{
      	if (num == 1) {document.getElementById("one").style.border = "5px solid purple";}
      	else if (num == 2) {document.getElementById("two").style.border = "5px solid purple";}
      	else if (num == 3) {document.getElementById("three").style.border = "5px solid purple";}
    }
     now++;   //move to next object in array
  
  	//wait 1.5 seconds before moving to cooresponding next execution
    if (type === "text"){setTimeout(text, 1500);}
  	else if (type === "color"){setTimeout(color, 1500);}
  	else if (type === "image"){setTimeout(image, 1500);}
}

//set variables to cooresponding array values
function setVars(array) {
	total = array.length;
	mstrArry = array; 
}

//next three function are for the specific card type (color, text, image) they clear old info, get new info, and place new info. Also, checks if last iteration and if so resets.
function text() {
  	clear();
  	changeClicks(1);//turn on clicking
	randomizer();//this is only numbers so it is not type specific
  	document.getElementById("one").innerHTML = "<div style='font-size:250%;margin-top:100px;'>" + one + "</div>";
  	document.getElementById("two").innerHTML = "<div style='font-size:250%;margin-top:100px;'>" + two + "</div>";
  	document.getElementById("three").innerHTML = "<div style='font-size:250%;margin-top:100px;'>" + three + "</div>";
  	reset();
}

function image() {
	clear();
  	changeClicks(1);//turn on clicking
	randomizer();//this is only numbers so it is not type specific
  	document.getElementById("one").innerHTML = '<img src="'+one+'" style="margin-top:100px;max-width:145px;">';
  	document.getElementById("two").innerHTML = '<img src="'+two+'" style="margin-top:100px;max-width:145px;">';
  	document.getElementById("three").innerHTML = '<img src="'+three+'" style="margin-top:100px;max-width:145px;">';
  	reset();
}

function color() {
	clear();
  	changeClicks(1);//turn on clicking
	randomizer();//this is only numbers so it is not type specific
  	document.getElementById("one").style.backgroundColor = one;
  	document.getElementById("two").style.backgroundColor = two;
  	document.getElementById("three").style.backgroundColor = three;
  	reset();
}

function randomizer(){
  	one = "";
	two = "";
	three = "";
  	var rand = Math.floor((Math.random() * 3) + 1);//get location of correct answer
  
  	//if the random then put the correct answer in it, otherwise get another random answer
  	if (rand == 1){
      	one = mstrArry[now];
    }
  	else {
      	check(1);
    }
  	if (rand == 2){
      	two = mstrArry[now];
    }
  	else {
      	check(2);
    }
  	if (rand == 3){
      	three = mstrArry[now];
    }
  	else {
      	check(3);
    }
}

//this gets the random wrong aswers for the other divs that the correct answer doens't go in
function check(num) {
  	var rand = Math.floor((Math.random() * mstrArry.length) + 1)-1;
  	//if result of random answer equal to any of the other answers try again, else make it the answer.
  	if (mstrArry[rand] === one || mstrArry[rand] === two || mstrArry[rand] ===  two || mstrArry[rand] === mstrArry[now]){
     	 check(num);
    }
  	else {
     	if (num == 1){one = mstrArry[rand];}
        else if (num == 2){two = mstrArry[rand];}
      	else if (num ==3){three = mstrArry[rand];}
    }
}

function clear() {
 	document.getElementById("one").style.border = "3px solid black";
  	document.getElementById("two").style.border = "3px solid black";
  	document.getElementById("three").style.border = "3px solid black"; 
}

function reset() {
 	//if greater then length reload page 
  	if (now > mstrArry.length-1)
    {
     	location.reload(); 
    }
}

function changeClicks(onOff) {
 	if (onOff === 1)
    {
     	//document.getElementById("one").addEventListener("click",function() { next(one,1); } );
		//document.getElementById("two").addEventListener("click",function() { next(two,2); } );
		//document.getElementById("three").addEventListener("click",function() { next(three,3); } );
		document.getElementById("one").addEventListener("click",list1);
		document.getElementById("two").addEventListener("click",list2 );
		document.getElementById("three").addEventListener("click",list3 );      
    }
  	else if (onOff === 0)
    {
     	document.getElementById("one").removeEventListener("click",list1);
		document.getElementById("two").removeEventListener("click",list2);
		document.getElementById("three").removeEventListener("click",list3);
    }
  
}