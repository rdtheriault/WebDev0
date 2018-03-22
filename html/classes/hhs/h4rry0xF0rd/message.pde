void setup() {
    size(900, 500);
    frameRate(30);
}
  var start = 0;
  var speed1 = 5;
  var speed2 = 5;
  var speed3 = 5;
  var speed4 = 5;
  var blockerSpeed = 5;
  var transObjectSpeed = blockerSpeed - 1;
  var x = 450;
  var x1 = 100;
  var x2 = 800;
  var y = 250;
  var y1 = 135;
  var y2 = 180;
  var y3 = 180;
  var circleBall(){
    fill(0,0,0);
    stroke(255,255,255);
    ellipse(x,y,50,50);
  }
  var wallBlocker1(){
    fill(0,0,0);
    stroke(255,255,255);
    rect(x1,y3,25,150);
  }
  var wallBlocker2(){
    fill(0,0,0);
    stroke(255,255,255);
    rect(x2,y2,25,150);
  }
  var middleLine(){
    stroke(255,0,0);
    line(450,0,450,500);
    line(449,0,449,500);
    line(451,0,451,500);
    line(448,0,448,500);
    line(452,0,452,500);
  }
  var startButton(){
    fill(0,0,0);
    stroke(34,139,34);
    rect(0,0,100,50);
  }
  var letterLeftNumber = 0;
  var letterLeft(){
    stroke(255,255,255);
    fill(255,255,255);
    text(letterLeftNumber,46,80);
  }
  var letterRightNumber = 0;
  var letterRight(){
    stroke(255,255,255);
    fill(255,255,255);
    text(letterRightNumber,860,30)
  }
  var scoreBoxes(){
    fill(0,0,0);
    stroke(34,139,34);
    rect(0,50,100,50);
    rect(820,0,80,50);
  }
void draw(){
  background(0,0,0)
  middleLine();
  scoreBoxes();
  letterLeft();
  letterRight();
  startButton();{
    stroke(255,255,255);
    fill(255,255,255);
    text("Click Here",20,20);
    text("To Start",28,30);
  }
  if ((mousePressed) &&(mouseX < 100)&& mouseY < 50){
    if (start === 0){start = 1;}
  }
  if (start === 1){
    wallBlocker1();{
      if (keyCode == '87'){
        if (y3 > 0){
          y3 = y3 - blockerSpeed; 
        }
      }
      if (keyCode == '83'){
        if(y3 < 350){
          y3 = y3 + blockerSpeed;
        }
      }
    }
    wallBlocker2();{
      if (keyCode == '38'){
        if (y2 > 0){
          y2 = y2 - blockerSpeed;
        }
      }
      if (keyCode == '40'){
        if (y2 < 350){
          y2 = y2 + blockerSpeed;
        }
      }
    }
    circleBall();{
      x = x+speed1;
      y = y+speed2;
      
      if (y > 474){
        speed2 = -5;
      }
      if (y < 26){
        speed2 = 5;
      }
      if ((((x <= x1+55)&& x >= x1)&& y >= y3)&& y <= y3+150){
        speed1 = 5;
      }
      if ((((x >= x2-27)&& x <= x2)&& y >= y2)&& y <= y2+150){
        speed1 = -5;
      }
      if (x > 875){
        start = 0;
        x = 450;
        y = 250;
        y2 = 180;
        y3 = 180;
        letterLeftNumber += 1;
      }
      if (x < 25){
        start = 0;
        x = 450;
        y = 250;
        y2 = 180;
        y3 = 180;
        letterRightNumber += 1;
      }
    }
  }
}