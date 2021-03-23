//Här skriver vi alla element som vi kommer att använda oss utav
const canvas = document.querySelector("canvas");

//Vi gör det möjligt att börja rita
var ctx = canvas.getContext("2d");

//Föremål som kommer behövas i spelet 
const lada = 40;

//Här skriver vi ut alla bilder som vi kommer rita ut 
var matBilden = new Image();
matBilden.src = "./Snake-JavaScript-master/img/food.png";

var marken = new Image();
marken.src = "./Snake-JavaScript-master/img/ground.png";

//Här lägger vi in alla ljudfilerna 

var dod = new Audio();
dod.src = "./Snake-JavaScript-master/audio/dead.mp3";

var nerat = new Audio();
nerat.src = "./Snake-JavaScript-master/audio/down.mp3";

var ata = new Audio();
ata.src = "./Snake-JavaScript-master/audio/eat.mp3";

var vanster = new Audio();
vanster.src = "./Snake-JavaScript-master/audio/left.mp3";

var hoger = new Audio();
hoger.src = "./Snake-JavaScript-master/audio/right.mp3";

var uppat = new Audio();
uppat.src = "./Snake-JavaScript-master/audio/up.mp3";

//Ormen för spelet 
var orm = [];
orm[0] = {
    x: 9 * lada,
    y: 10 * lada
}

//Skapa maten
var mat = {
    x: Math.floor(Math.random() * 17 + 1) * lada,
    y: Math.floor(Math.random() * 15 + 3) * lada
}

//Poängen i spelet 
var poang = 0;

//Kontrollera ormen
var d;


//Hur vi kotnrollerar ormen i spelet
document.addEventListener("keydown", riktning);

function riktning(event) {
    var key = event.keyCode;
    if (key == 65 && d != "Hoger") {
        vanster.play();
        d = "Vanster";
    } else if (key == 87 && d != "Ner") {
        d = "Upp"
        uppat.play();
    }
    else if (key == 68 && d != "Vanster") {
        d = "Hoger"
        hoger.play();
    }
    else if (key == 83 && d != "Upp") {
        d = "Ner"
        nerat.play();
    }
}

//Kolla om vi slår i något
function kollision(head, array) {
    for(let i = 0; i < array.length; i++) {
        if(head.x == array[i].x && head.y == array[i].y){
            return true;
        }  
    }
    return false;
}

// Rita ut alla bilderna på canvas 

function ritaAllting() {

    ctx.drawImage(marken,0,0,800,800);

    for(let i = 0; i < orm.length; i++) {
        ctx.fillStyle = (i == 0) ? "pink" : "green";
        ctx.fillRect(orm[i].x,orm[i].y,lada,lada);

        ctx.strokeStyle = "red";
        ctx.strokeRect(orm[i].x,orm[i].y,lada,lada);
    }

    ctx.drawImage(matBilden, mat.x, mat.y);

    //Minnas den äldre positionen av ormen i spelet 
    var ormenX = orm[0].x;
    var ormenY = orm[0].y;

    //Vilket håll
    if (d == "Vanster") ormenX -= lada;
    if (d == "Upp") ormenY -= lada;
    if (d == "Hoger") ormenX += lada;
    if (d == "Ner") ormenY += lada;

    //Om ormen äter maten
    //Maten i spelet
    if (ormenX == mat.x && ormenY == mat.y) {
        poang++;
        ata.play();
        mat = {
            x: Math.floor(Math.random() * 17 + 1) * lada,
            y: Math.floor(Math.random() * 15 + 3) * lada
        }
        // Vi tar inte bort svansen
    } else {
        //Ta bort svansen
        orm.pop();
    }

    // Lägg till ett nytt huvud 

    var nyttHuvud = {
        x: ormenX,
        y: ormenY
    }

    //Game over om
    if (ormenX < lada || ormenX > 17 * lada || ormenY < 3*lada || ormenY > 17 * lada || kollision(nyttHuvud, orm)) {
        clearInterval(spelet);
        dod.play();
    }

    orm.unshift(nyttHuvud);

    ctx.fillStyle = "orange";
    ctx.font = "30px Sans Serif";
    ctx.fillText(poang, 2 * lada, 1.6 * lada);

}


//Spelet kommer starta om efter varje 100ms 
var spelet = setInterval(ritaAllting, 100);