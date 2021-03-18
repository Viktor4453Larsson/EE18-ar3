
//Alla element som vi behöver använda oss av
const canvas = document.querySelector("canvas");

// Starta ritmotorn
var ctx = canvas.getContext("2d");

// Hur hög och bredd vår canvas är
canvas.width = 800;
canvas.height = 600;

// Backgrundsbilden som vi använder
var Backgrundsbilden = new Image();
Backgrundsbilden.src = "./bilder/zero-take-nrrjdsabu8w-unsplash.jpg";

var lådaX = 300;
var lådaY = 500;

var lådaW = 700;
var lådaA = 400;

var lådaJ = 300;
var lådaK = 400;

function loopen() {
    ctx.clearRect(0, 0, 800, 600);

    //Här ritar vi ut backgrundsbilden
    ctx.drawImage(Backgrundsbilden, 0, 0);

    //Rita en rektangel
    // En blå rektangel
    ctx.fillStyle = "blue";
    ctx.fillRect(lådaX, lådaY, 100, 100);

    lådaX += 10;

    //En orange rektangel
    ctx.fillStyle = "orange";
    ctx.fillRect(lådaW, lådaA, 50, 50);

    lådaA -= 2;

    //En grön rektangel
    ctx.fillStyle = "green";
    ctx.fillRect(lådaJ, lådaK, 250, 100);
    requestAnimationFrame(loopen);

    lådaJ += 5;
    lådaK += 5;

    
}
loopen();



