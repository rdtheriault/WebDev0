void setup() {
  size (500,500);
  frameRate(40);
  //button
  fill(0,234,255);
  rect(100,100,150,50,5);
  fill(0,0,0);
  textSize(19);
  text("start game",110,133)
  textSize(25);
  text("dont touch the sides",110,200);
  
    // @pjs preload must be used to preload the image

    /* @pjs preload="unnamed.png"; */

   

}
var xPositions = 300;
var yPositions = 100;
var scene = 0;
var i = 0;

void draw() {
  
  if (scene == 1) {
    background (204, 0, 255);
  //x y width height
  fill(0,200,255);
  ellipse(xPositions, yPositions -i , 100, 100);
  fill(153);
  rect(xPositions+50, yPositions +i +50,55,55);
  
  if(i < 500) {
    i+=2;
  }
  
  }
   if (yPositions+50+i > 500 || xPositions+50 > 500 || xPositions < 0 || yPositions-i < 0){
     scene = 2;
   scene2();
   xPositions = 300;
   yPositions = 300;
     
   i = 0;
   }
  
  
}
 void mousePressed() {
   if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 && scene != 1 ){
    println("pretty useless button"); 
     scene = 1;
   }  
     else {
       xPositions = mouseX;
       yPositions = mouseY;
       i = 0;
     }
   
 }
   function scene2(){
  //button
  fill(0,234,255);
  rect(100,100,150,50,5);
  fill(0,0,0);
  textSize(19);
  text("oh noes",110,133)
  textSize(25);
  text("oh noes! you touch the sides",200,200);
     



}