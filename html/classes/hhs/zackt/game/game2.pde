void setup() {
  size(500, 400);
  frameRate(30);
  background(150, 127, 219);
  fill(194, 149, 45);
  rect(-1, 300, 501, 100);
  //text("what", 0, 230);

}
var scene = 1;
var level = 1;
var speed = 10;
var turn = 0;


      // @pjs preload must be used to preload the image 

    /* @pjs preload="Spongegar.png"; */

    PImage b;

   b = loadImage("Spongegar.png");

    image(b, 0, 225, 75, 75);
xPos = 0;
yPos = 225;
jump = 0;


void draw() {
  
  if(scene == 1) {
  fill(232, 100, 100);
  rect(100, 100, 150, 50, 5);
  fill(0,0,0);
  textSize(19);
  text("begin", 110, 133);
         
  }
  else if (scene == 2) {
  jumped();
  object1();
  object2();
  
  } else if (scene == 3) {
    scene3();
  }
  
  
  
  
  //level text
  
  fill(250, 0, 0);
  textSize(19);
  text("level:" + level, 430, 20); 




}


funtion jumped() {
    if(keyPressed == true) {
	background(150, 127, 219);
  fill(194, 149, 45);
  rect(-1, 300, 501, 100);
    image(b, xPos, yPos+jump, 75, 75);
    if (jump > -100) {
     
    jump -= 10;
    }
    //text(jump, 10, 10);
  } else {
    if (jump < 0) {
      
      jump += 10;
	background(150, 127, 219);
  fill(194, 149, 45);
  rect(-1, 300, 501, 100);
      image(b, xPos, yPos+jump, 75, 75);
      //text(jump, 10, 10);
    } else {
  background(150, 127, 219);
  fill(194, 149, 45);
  rect(-1, 300, 501, 100);
      image(b, xPos, yPos+jump, 75, 75);
      //text(jump, 10, 10);
    }
  }
}
var o1xPos = 500;
var o1yPos = 275;
function object1() {
  fill(255, 255, 255);
  ellipse(o1xPos, o1yPos, 25, 25);
  o1xPos -= speed;
  
  //text(yPos+jump, 0, 50);
  //text(xPos, 0, 35);
  //text(o1xPos, 25, 35);
  //text(o1yPos, 25, 50);
  if (o1xPos >= xPos && o1xPos <= (xPos+75) && o1yPos >= yPos +jump && o1yPos <= (yPos+jump+75) && scene != 3) {
    //println("the ball hit me");
    //text("the ball hit me", 10, 10);
    scene = 3;
  }
	if (o1xPos < 0) {
		o1xPos = 750;
  	}
  
}
var o2xPos = 750;
var o2yPos = 175;
function object2() {
  fill(255, 255, 255);
  ellipse(o2xPos, o2yPos, 25, 25);
  o2xPos -= speed;
  
  //text(yPos+jump, 0, 50);
  //text(xPos, 0, 35);
  //text(o2xPos, 25, 35);
  //text(o2yPos, 25, 50);
  if (o2xPos >= xPos && o2xPos <= (xPos+75) && o2yPos >= yPos +jump && o2yPos <= (yPos+jump+75) && scene != 3) {
    //println("the ball hit me");
    //text("the ball hit me", 10, 10);
    scene = 3;
  }
  if (o2xPos < 0) {
	o2xPos = 750;
    leveling();
  }
  
}
function leveling() {
	turn++;
	if (turn == 1){
    	speed += 2;   
    	turn = 0; //reset turns
    	level++;
	}
}
void mousePressed() {
  if (mouseX >= 100 && mouseX <= 250 && mouseY >= 100 && mouseY <= 150 && scene != 2) {
    if (scene == 3) {
      level = 1;
    }
    scene = 2;
  } else {
  
  }
}

void scene3() {
  background(50, 100, 40);
  fill(105, 88, 42);
  rect(-1, 300, 501, 100);
  fill(247, 0, 255);
  rect(100, 100, 150, 50, 5);
  fill(0,0,8);
  textSize(19);
  text("try again", 110, 133);
  fill(0,0,0);
  textSize(19);
  text("Congrats! You made it to level " + level + "!", 0, 25);
  o1xPos = 500;
  o2xPos = 750;
  speed = 10;
  turn = 0;

}
