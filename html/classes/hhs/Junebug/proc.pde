void setup() {
  size(500, 500);
  frameRate(30);
  //button
  fill(0, 150, 150);
  rect(100, 100, 150, 50, 5);
  fill(0,0,0);
  textSize(19);
  text("begin", 110, 133);
  textSize(19);
  text("Don't touch the SIDES!!", 110, 200);
}
var xPos = 250;
var yPos = 250;
var i = 0;
var scene = 0;
  
void draw() {
  if (scene == 1) { 
  background(204, 256, 276);
  fill(250, 0, 0);
  ellipse(xPos-i, yPos-i, 100, 100); 
  
  fill(153);
  rect(xPos+50+i, yPos+50+i, 55, 55);
  }  
  
  if (i<500) {
    i+=2;
  }
  if(yPos+100+i > 500 || xPos+100+i > 500 || xPos-50-i < 0 || yPos-50-i < 0) {
    scene = 2;
    scene2();
    xPos= 250;
    yPos= 250;
    i= 0;
  }

}
void mousePressed() {
  if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 && scene != 1) {
    println("Useless, told you");
    scene = 1;
  } else {
  xPos = mouseX;
  yPos = mouseY;
  i = 0;
  }
}
function scene2() {
  size(500, 500);
  frameRate(30);
  background(200, 0, 0);
  //button
  fill(0, 150, 150);
  rect(100, 100, 150, 50, 5);
  fill(0,0,0);
  textSize(19);
  text("begin", 110, 133);
  //instructions
  textSize(19);
  text("you LOST!?!?!", 110, 200);
}