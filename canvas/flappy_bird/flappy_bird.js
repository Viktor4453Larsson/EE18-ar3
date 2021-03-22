

// Vi skannar efter canvas på sidan

const eCanvas = document.querySelector("canvas");

// Vi startar ritmöjligheterna här: 

var ctx = eCanvas.getContext("2d");

//Andra variabler
var gap = 75;
var constant = norraRoret.height+gap;

var bX = 50;
var bY = 150; 

var gravitaion = 2;

var rakningen = 0;

//När tangentborden trycks

document.addEventListener("keydown", moveUp);

function moveUP() {
    bY -= 20;
    flyggaLjud.play();
}



// Här ritar vi bilder som rör på oss flera gånger
// Här ritar vi ut bilderna i minnet

var backgrunden = new Image();
backgrunden.src = "./flappyBird - starter Template/images/bg.png";

var fagel = new Image();
fagel.src = "./flappyBird - starter Template/images/bird.png";

var golv = new Image();
golv.src = "./flappyBird - starter Template/images/fg.png";

var norraRoret = new Image();
norraRoret.src = "./flappyBird - starter Template/images/pipeNorth.png";

var sodraRoret = new Image();
sodraRoret.src = "./flappyBird - starter Template/images/pipeSouth.png";

//Här ritar vi ut ljudet i minnet

var flyggaLjud = new Audio();
flyggaLjud.src = "./flappyBird - starter Template/sounds/fly.mp3";

var poangLjud = new Audio();
poangLjud.src = "./flappyBird - starter Template/sounds/score.mp3";

function ritaUtAllt() {

    ctx.drawImage(backgrunden, 0, 0);

    ctx.drawImage(norraRoret, 100, 0);
       ctx.drawImage(sodraRoret, 100, 0+constant);


    ctx.drawImage(golv, 0, eCanvas
        .height - golv.height);

    ctx.drawImage(fagel, bX, bY);

    requestAnimationFrame(ritaUtAllt);

    bY += gravitaion;
    
}

ritaUtAllt();

// Rörets kordinater 

var ror = [];

ror[0] = {
    x : eCanvas.width,
    y : 0
};

/*function loopar() {
    //Här loopar vi igenom koden
    for (var i = 0; ror.length i++) {
       ctx.drawImage(norraRoret, ror[i].x, ror[i].y);
       ctx.drawImage(sodraRoret, ror[i].x, ror[i].y+constant);

       ror[i].x--;
       if (ror[i].x == ctx.width - 188) {
           ror.push(
               x: ctx.width, 
               y: Math.floor(Math.random() * norraRoret.height) - norraRoret.height
           );
       }

        
    }
    loopar();
}*/