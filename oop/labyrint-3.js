// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");

eCanvas.width = 600;
eCanvas.height = 500;

//Slå på ritmotorn 
var ctx = eCanvas.getContext("2d");

// Skapa kartan 
var karta = [
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [0, 0, 0, 0, 1, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1],
    [0, 1, 1, 0, 1, 1, 1, 0, 0, 1, 1, 0, 1, 1, 0, 1, 1, 0, 1, 1],
    [0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0, 0, 1, 1],
    [0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 0, 0, 1, 1, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 1, 1, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]

];

/* Objekt */
/* Spelaren */
var spelare = {
    rad: 3,
    kolumn: 5,
    bild: new Image(),
    rotation: 0,
    //Rita ut figuren
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}
spelare.bild.src = "./bilder/nyckelpiga.png";


/* Var finns spelaren */
/* spelare.rad */


var monster1 = {
    rad: 7,
    kolumn: 7,
    bild: new Image(), 
    //Rita ut monstret
 rita() {
    ctx.save();
    ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
    ctx.rotate(this.rotation / 180 * Math.PI);
    ctx.drawImage(this.bild, -25, -25, 50, 50);
    ctx.restore();
}
}
monster1.bild.src = "./bilder/Monsters-icon.png";

var monster2 = {
    rad: 7,
    kolumn: 7,
    bild: new Image(),
     rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}
monster2.bild.src = "./bilder/Monsters-icon.png";

var peng1 = {
    rad: Math.floor(Math.random() * 12),
    kol: Math.floor(Math.random() * 16),
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
peng1.bild.src = "./bilder/coin.png";

var peng2 = {
    rad: Math.floor(Math.random() * 12),
    kol: Math.floor(Math.random() * 16),
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
peng2.bild.src = "./bilder/coin.png";

var peng3 = {
    rad: Math.floor(Math.random() * 12),
    kol: Math.floor(Math.random() * 16),
    bild: new Image(),
    rita() {
        ctx.drawImage(this.bild, this.kolumn * 50, this.rad * 50, 50, 50);
    }
}
peng3.bild.src = "./bilder/coin.png";

// Rita en karta 
function ritaKartan() {
    // Loopa igenom raderna
    for (let j = 0; j < 18; j++) {

        // Loopa igenom kolumnerna
        for (var i = 0; i < 20; i++) {


            //Om "1" hittas ska en klass ritas ut
            var x = i * 50;
            var y = j * 50;
            if (karta[j][i] == 1) {
                ctx.fillRect(x, y, 50, 50);
            }
        }
    }

}

//Animationsloopen 
function loopen() {
    //Sudda med jämna mellanrum 
    ctx.clearRect(0, 0, 600, 500);
    // Rita ut allt
    ritaKartan();
    spelare.rita();
    peng1.rita();
    peng2.rita();
    peng3.rita();
    monster1.rita();
    monster2.rita();
    requestAnimationFrame(loopen)
}
loopen();