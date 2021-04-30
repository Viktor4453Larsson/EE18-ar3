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

class Mynt {
    constructor() {
        this.rad = Math.floor()
        this.kolumn = 1;
        this.bild = new Image();
        this.bild.src = "./bilder/coin.png";
    }
}

/* Spelare class (OOP) */
class Spelare {
    constructor() {
        this.rad = 3;
        this.kolumn = 5;
        this.bild = new Image();
        this.rotation = 0;
        this.spelare.bild.src = "./bilder/nyckelpiga.png";
    }
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}

/* Här skapas ett objekt */
var spelare = new Spelare();


/* Var finns spelaren */
/* spelare.rad */

class Monster {
    constructor() {
        this.rad = 7;
        this.kolumn = 7;
        this.bild = new Image();
        this.bild.src = "./bilder/Monsters-icon.png";
    }
    rita() {
        ctx.save();
        ctx.translate(this.kolumn * 50 + 25, this.rad * 50 + 25);
        ctx.rotate(this.rotation / 180 * Math.PI);
        ctx.drawImage(this.bild, -25, -25, 50, 50);
        ctx.restore();
    }
}

/* En array för monster */
var monsters = [];

for (let i = 0; i < 3; i++) {
    monsters.push(new Mynt())  
}

var monster1 = new Monster();
var monster2 = new Monster();

var mynten = [];

/* En array för mynt */
var mynten = [];

for (let i = 0; i < 5; i++) {
    mynten.push(new Mynt())  
}

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
    mynten.forEach(monsters => monsters.rita());
    monsters.forEach(monsters => monsters.rita());
    spelare.rita();
    requestAnimationFrame(loopen)
}
loopen();