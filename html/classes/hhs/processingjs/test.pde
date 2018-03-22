//change 1 = added background and circle and square, showed variables posistioning > button press move or stamp items
//change 2 = added movement to circle and square, showed how background placement changed how it "stamped" vs moved
//change 3 = added button and scene selection
//change 4 = added code to be able to lose if hit edge, added end game scene

void setup() {
   size(500, 500);
	frameRate(30);
   background(204, 247, 255);
   
   
   ////button
    fill(0, 234, 255);
	rect(100, 100, 150, 50, 5);
	fill(0, 0, 0);
	textSize(19);
	text("Start Game", 110, 133);//original Useless button
  ////instructions
  	textSize(25);
	text("Don't touch the sides", 110, 200);
 }

var xPositions = 300;
var yPositions = 300;
var i = 0;
var scene = 0;

void draw() {  
 
  ////x y width height
  if (scene == 1){
    background(204, 0, 255);
    
  	fill(0, 200, 255);
  	ellipse(xPositions, yPositions-i, 100, 100);

  	fill(153);
  	rect(xPositions+50, yPositions+50+i, 55, 55);
    
    if (i < 500){
   		i += 2;
  	}
  }
  if (yPositions+50+i > 500 || xPositions+50 > 500 || xPositions < 0 || yPositions-i < 0){//added change 4
      scene = 2;
      scene2();
      xPositions = 300;
	  yPositions = 300;
      i = 0;
  }
 
}

void mousePressed() {
  if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 && scene != 1) { //add and scene == 0 so you can click there later
        println("Let the fun begin");//used to be "Pretty Useless" 
    	////change scene
    	scene = 1;
    }
  else {
	xPositions = mouseX;
	yPositions = mouseY;
  	i = 0;
  }
  
}
void mouseDragged() {
  
}



function scene2(){
 	 ////button
    fill(0, 234, 0);
	rect(100, 100, 150, 50, 5);
	fill(0, 0, 0);
	textSize(19);
	text("Try Again", 110, 133);//original Useless button
  ////instructions
  	textSize(25);
	text("You touched a side..", 110, 200);
}