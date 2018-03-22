void setup() {
  size (500,500);
  frameRate(40);
  //button
  fill(0,234,255);
  rect(100,100,150,50,5);
  fill(0,0,0);
  textSize(19);
  text("useless button",110,133)
}
var xPositions = 300;
var yPositions = 100;
var scene = 0;

void draw() {
  
  if (sceen == 1) {
  //x y width height
  fill(0,200,255);
  ellipse(xPositions, yPositions , 100, 100);
  fill(153);
  rect(xPositions+50, yPositions+50,55,55);
  
  if(i < 500) {
    i+=2;
  }
  
  }
}
 void mousePressed() {
   if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 ){
    println("pretty useless button"); 
     scene = 1;
   }  
     else {
       xPositions = mouseX;
       yPositions = mouseY;
       i = 0;
     }
   



}