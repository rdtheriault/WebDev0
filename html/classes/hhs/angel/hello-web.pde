 void setup() {
   size(500, 500);
	frameRate(60);
 }
 
var xPositions = [200];
var yPositions = [0];

void draw() {  

    background(204, 247, 255);
    for (var i = 0; i < xPositions.length; i++) {

        noStroke();
        fill(0, 200, 255);
        ellipse(xPositions[i], yPositions[i], 10, 10);
        yPositions[i] += 100;
    }

    //if (mouseIsPressed){
        //xPositions.push(mouseX);
        //yPositions.push(mouseY);
    //}

}

void mousePressed() {

  xPositions.push(mouseX);
  yPositions.push(mouseY);

}