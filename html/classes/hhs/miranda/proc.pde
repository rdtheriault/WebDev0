void setup() {
	size (500, 500);
    frameRate(30);
    background(0, 0, 0)
        fill(0, 255, 187);
	rect(100, 100, 150, 50, 5);
	fill(0, 0, 0);
	textSize(19);
	text("Start game", 110, 133);
  	textSize(25);
  	text("Don't touch the side", 110, 200);
}
var xPositions = 400;
var yPositions = 400;
var i= 0;
var scene= 0;
void draw() {
  if (scene === 1) {
  background(0, 255, 174);
  // x, y width,height
  fill(0, 0, 0);
  ellipse(xPositions, yPositions-i,100, 100);
  fill(0, 0, 0);
  rect(xPositions+50, yPositions+50+i, 35, 35);
  if (i < 500) {
  		i += 2;
    }
}
  if (yPositions+85+i > 500 || xPositions+50 > 500 || yPositions < 0 || yPositions-i < 0) {
  scene= 2;
  scene2();
  xPositions = 300;
  yPositions = 300;
  i = 0;
}
}

void mousePressed() {
    if (mouseX >= 100 && mouseX <= 250 &&
        mouseY >= 100 && mouseY <= 150 && scene != 1) { //add and scene == 0 so you can click there later
        println("Still pretty useless"); 
    	////change scene
    	scene = 1;
    }
	else {
      xPositions = mouseX;
      yPositions = mouseY;
      i = 0;
    }
}
function scene2(){
 	 ////button
    fill(0, 234, 0);
	rect(100, 100, 150, 50, 5);
	fill(255, 0, 0);
	textSize(19);
	text("Try Again", 110, 133);//original Useless button
  ////instructions
  	textSize(25);
	text("You touched a side..", 110, 200);
}