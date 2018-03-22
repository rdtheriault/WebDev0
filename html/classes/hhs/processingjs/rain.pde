 void setup() {
   size(500, 500);
	frameRate(30);
 }
 
var xPositions = [200];
var yPositions = [0];

void draw() {  

    background(204, 247, 255);
    for (var i = 0; i < xPositions.length; i++) {

        noStroke();
        fill(0, 200, 255);
        ellipse(xPositions[i], yPositions[i], 10, 10);
        yPositions[i] += 5;
    }

    //xPositions.push(random(500));
    //yPositions.push(0);

}

void mousePressed() {

  xPositions.push(mouseX);
  yPositions.push(mouseY);
	for (var i = 0; i < 100; i++) {
        //xPositions.push(random(500));
  		//yPositions.push(random(250));
    }
}
void mouseDragged() {
  xPositions.push(mouseX);
  yPositions.push(mouseY);
}
