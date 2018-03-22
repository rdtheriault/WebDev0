void setup() {
  size(500, 500);
  frameRate(30);
  background(66, 191, 244);
  
  
  ////button
 	fill(0,234, 255);
 	rect(100, 100, 150, 50, 5);
  	fill(0,0,0);
  	textSize(19);
  	text("Useless Button", 110, 133);
  
  
}

var xPosition = 100;
var yPosition= 300;
var scene= 0;
var i = 0;

void draw() {
 
  if ( scene == 1){
    background(204, 0, 255);
    
  
 
  	fill(244, 66, 131);
  	ellipse(xPosition, yPosition, 100,100);
  
  	fill(153);
  	rect(xPosition+50, yPosition+50, 55, 55);
    
    if (i < 500){
    i += 2;
      
    }
  } 
}

void mousePressed() {
 if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <=150 && scene != 1 ){
   println("Still pretty useless");
   ////change scene
   scene = 1;
 }
  else {
    xPosition = mouseX;
    yPosition = mouseY;
    i = 0;
    
  }
   
  
  
}








