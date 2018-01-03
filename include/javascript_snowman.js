window.onload = function(){

// Set up!
var snowman_canvas = document.getElementById("snowman");
var context = snowman_canvas.getContext("2d");

// text message
var tekst = ("Prettige feestdagen iedereen!");
var tekstPadding = 50;
var tekstMargin = 40;

// variables for the snowman
var x = 755;
var y = 230;
var limbWeight = 10;
var diameter = 40;
var eyeWidth = 7;
var innerEye = 2;
var height = 2*Math.PI;

// sky night met vallende sterren
var starSize = 8;
var xStar = 600;
var yStar = 30;
var speed = 0.8;

draw = function(){
  context.beginPath();
  context.rect(0, 0, 900, 900);
  context.closePath();
  context.fillStyle = "lightblue";
  context.fill();

  // color the sky in gradient
  var grond=context.createLinearGradient(0,0,0,600);
  grond.addColorStop(0,"CornflowerBlue");
  grond.addColorStop(1,"Maroon");

  // Draw the background and fill the sky
  context.beginPath();
  context.arc(600, 400, 400, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle= grond;
  context.fill();
  context.lineWidth = 1;
  context.stroke();

  // sterren die verdwijnen

  if (xStar<740){
    context.beginPath();
    context.arc(xStar, yStar, starSize, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }

  if (xStar<695){
    context.beginPath();
    context.arc(xStar+40, yStar-5, starSize-1, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }
  if (xStar<700){
    context.beginPath();
    context.arc(xStar+90, yStar+20, starSize-3, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }
  if (xStar<990){
    context.beginPath();
    context.arc(xStar-160, yStar+50, starSize-5, 0-1, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }
  if (xStar<945){
    context.beginPath();
    context.arc(xStar-60, yStar+100, starSize-1, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }

  if (xStar<1100){
    context.beginPath();
    context.arc(xStar-220, yStar+100, starSize-4, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();
  }

  // deze sterren lopen natuurlijk van het canvas af
    context.beginPath();
    context.arc(xStar-250, yStar+130, starSize-1, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();

    context.beginPath();
    context.arc(xStar-290, yStar+110, starSize-1, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();

    context.beginPath();
    context.arc(xStar+140, yStar+120, starSize-3, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();

    context.beginPath();
    context.arc(xStar-250, yStar+130, starSize-1, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();

    context.beginPath();
    context.arc(xStar+160, yStar+100, starSize-3, 0, 2*Math.PI);
    context.closePath();
    context.fillStyle = "yellow";
    context.fill();

  // Draw greysnow pile behind the snowman
  context.beginPath();
  context.arc(x+70, y+155, 60, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle = "grey";
  context.fill();
  context.lineWidth = 1;
  context.strokeStyle = "black";
  context.stroke();

  // Draw the left arm
  context.beginPath();
  context.moveTo(x-140,y+70);
  context.lineTo(x,y+60);
  context.closePath();
  context.lineWidth = limbWeight;
  context.strokeStyle = "#5a2d0c";
  context.stroke();

  // Draw the right arm
  context.beginPath();
  context.moveTo(x+30,y+60);
  context.lineTo(x+120,y);
  context.closePath();
  context.lineWidth = limbWeight;
  context.strokeStyle = "#5a2d0c";
  context.stroke();

  // Draw the body
  context.fillStyle = "white";
  context.beginPath();
  context.arc(x, y+90, diameter+20, 0, 2*Math.PI);
  context.closePath();
  context.fill();
  context.lineWidth = 2;
  context.strokeStyle = "black";
  context.stroke();

  // Draw the face
  context.fillStyle = "white";
  context.beginPath();
  context.arc(x, y+10, diameter, 0, 2*Math.PI);
  context.closePath();
  context.fill();
  context.lineWidth = 2;
  context.stroke();
  context.fillStyle = "black";

  // Draw the left eye
  context.beginPath();
  context.arc(x-17, y, eyeWidth, 0, 2*Math.PI);
  context.closePath();
  context.fill();

  // Draw the right eye
  context.beginPath();
  context.arc(x+14, y+2, eyeWidth, 0, 2*Math.PI);
  context.closePath();
  context.fill();

  // Draw the innerleft eye
  context.beginPath();
  context.arc(x-19, y-2, innerEye, 0, 2*Math.PI);
  context.closePath();
  context.fillStyle = "white";
  context.fill();

  // Draw the innerright eye
  context.beginPath();
  context.arc(x+12, y, innerEye, 0, 2*Math.PI);
  context.closePath();
  context.fillStyle = "white";
  context.fill();

  // Draw a nose
  // this should change into a circle and a triangle
  context.beginPath();
  context.ellipse(x-4, y+19, 10, 7, 80 * Math.PI/180, 0, 2 * Math.PI);
  context.closePath();
  context.fillStyle = "orange";
  context.fill();

  context.beginPath();
  context.moveTo(x-55,y+20); // punt links
  context.lineTo(x-5,y+28); // onderste punt rechts
  context.lineTo(x-5,y+10); //bovenste punt rechts
  context.fillStyle = "orange";
  context.fill();

  // Draw the gras with snow on it
  context.beginPath();
  context.arc(x-95, y+168, 40, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle = "white";
  context.fill();

  context.beginPath();
  context.arc(x, y+170, 50, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle = "white";
  context.fill();
  context.lineWidth = 2;
  context.stroke();

  context.beginPath();
  context.arc(x+60, y+170, 50, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle = "white";
  context.fill();
  context.lineWidth = 2;
  context.stroke();

  context.beginPath();
  context.arc(x-60, y+175, 50, Math.PI, 2*Math.PI, false);
  context.closePath();
  context.fillStyle = "grey";
  context.fill();
  context.lineWidth = 2;
  context.stroke();

  // Write a message
  context.font = "30px Garamond black";
  context.fillStyle = "black";
  context.fillText(tekst,tekstPadding, tekstMargin);

  // sneeuwmanimatie
  //x++

  // bewegende sterren
  xStar = xStar + speed;
  if (xStar > 1100)
  {
  xStar = 600;
  }
}

  //animation loop
  setInterval(draw, 33);
}