void setup(){
  size(500,500);
  frameRate(30);
  background(111,20,58)
  //button
   fill(255, 146, 119);
	rect(100, 100, 150, 50, 5);
	fill(0, 0, 0);
	textSize(19);
	text("Start Game", 110, 133);
   textSize(25);
  text("Don't touch the sides",110,200);
}

var xPositions=300;
var yPositions=300;
var i=0;
var scene=0;


void draw(){
  if (scene==1){
  background(114, 13, 55);
  
  //x, y,width,height
  fill(167,2,55) ;
  ellipse(xPositions,yPositions-i,100,100);
  
  fill(209, 131, 163);
  rect(xPositions+50,yPositions+50+i,55,55);

   
      if (i < 500){
   		i += 2;
  }
  }
  if (yPositions+105+i > 500 || xPositions+50 > 500 || xPositions < 0 || yPositions-i < 0){
      scene = 2;
      scene2();
    xPositions=300
    yPositions=300
    i=0
  }
}

void mousePressed(){
   if (mouseX >= 100 && mouseX <= 250 &&
        mouseY >= 100 && mouseY <= 150 && scene !=1) { 
        println("Still pretty useless");
     
     scene=1;
   }
  else{
  xPositions=mouseX;
  yPositions=mouseY;
  i=0;
  }
}



function scene2(){
  
   //button
    fill(239, 50, 128);
	rect(100, 100, 150, 50, 5);
	fill(146, 26, 206);
	textSize(19);
	text("Try Again", 110, 133);
  //instructions
  	textSize(25);
	text("You touched a side..", 110, 200);
  
}