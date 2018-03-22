void setup() {
  size(500, 500);
  frameRate(30);
  background(204, 247, 255);
}

var xpositions = 300;
var ypositions = 300;
var i = 0;

void draw() { 
 background(204, 247, 255); 
  //x y width height
  fill(0, 200, 255);
  ellipse(xpositions, ypositions-i, 100, 100);
  
  fill(153);
  rect(xpositions+50, ypositions+50+i, 55, 55);

if (i < 500) {
  i += 2;
  
}
}

void mousePressed() {
  xpositions = mouseX;
  ypositions = mouseY;
  i = 0;
  
}
