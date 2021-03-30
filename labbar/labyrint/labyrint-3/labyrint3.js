// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");
const eP = document.querySelector("p");



//Ställ in den storleken du tänker använda
eCanvas.width = 1000;
eCanvas.height = 900;

//Slå på ritmotorn 
var ctx = eCanvas.getContext("2d");


// Skapa kartan 
var karta = [
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1],
    [1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1],
    [1, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1],
    [1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1],
    [1, 0, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 1],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 1],
    [0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1],
    [0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1],
    [0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [1, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]

];

//Figur i ett objekt 
var figur = {
    rad : 6,
    kol : 0,
    rotation: 0,
    poang : 0,
    bild: new Image()
}
figur.bild.src = "../bilder/nyckelpiga.png";

var monster = {
    rad : 8,
    kol : 0,
    rotation : 0,
    bild: new Image()
}
monster.bild.src = "../bilder/Monsters-icon.png";

var peng = {
    rad : Math.floor(Math.random() * 12),
    kol : Math.floor(Math.random() * 16),
    bild: new Image()
}
peng.bild.src = "../bilder/Coin-icon.png";

var peng1 = {
    rad : Math.floor(Math.random() * 13),
    kol : Math.floor(Math.random() * 17),
    bild: new Image()
}
peng1.bild.src = "../bilder/Coin-icon.png";



function ritaMynt(peng) {
    ctx.drawImage(peng.bild, peng.kol * 50, peng.rad * 50, 50, 50);
}

// Se till att pengen inte hamnar på en vägg
function spawna(objekt) {
    // En oändlig loop
    while (true) {
    objekt.rad = Math.floor(Math.random() * 12);
    objekt.kol = Math.floor(Math.random() * 16); 

    //Avbryt när en 0:a har hittats
    if (karta[objekt.rad][objekt.kol] == 0) {
        break;
    }
   }
}
spawna();

// Se till att pengen inte hamnar på en vägg
function spawna(peng) {
    // En oändlig loop
    while (true) {
    monster.rad = Math.floor(Math.random() * 12);
    monster.kol = Math.floor(Math.random() * 16); 

    //Avbryt när en 0:a har hittats
    if (karta[monster.rad][monster.kol] == 0) {
        break;
    }
   }
}
spawna();

// Se till att pengen inte hamnar på en vägg


// De som händer när vi hamnar på samma ruta som myntet
function plockaMynt() {
    //När nyckelpiggan och myntet hamnar på samma ruta
    if (figur.rad == peng.rad && figur.kol == peng.kol) {
        //Öka antalet poäng
        figur.poang++;
        eP.textContent = figur.poang;
        //Placera myntet någon annan stans
        spawnaMynt();

        
        }
        
    }


    function plockaMynt2() {
        //När nyckelpiggan och myntet hamnar på samma ruta
        if (figur.rad == peng1.rad && figur.kol == peng1.kol) {
            //Öka antalet poäng
        figur.poang++;
        eP.textContent = figur.poang;
        //Placera myntet någon annan stans
        spawnaMynt2();
    }
}

//Det som händer när vi och monstret är på samma ruta 
function monsterAttak() {
    //När nyckelpiggan och myntet hamnar på samma ruta
    if (figur.rad == monster.rad && figur.kol == monster.kol) {
        //Öka antalet poäng
  
    spawnafigur();
}
}

function spawnafigur() {
    ritaFigur();
}


//Rita ut figuren
function ritaFigur() {
    ctx.save();
    ctx.translate(figur.kol * 50 + 25, figur.rad * 50 + 25);
    ctx.rotate(figur.rotation / 180 * Math.PI);
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
}

//Rita ut monstret
function ritaMonster() {
    ctx.save();
    ctx.translate(monster.kol * 50 + 25, monster.rad * 50 + 25);
    ctx.rotate(monster.rotation / 180 * Math.PI);
    ctx.drawImage(monster.bild, -25, -25, 50, 50);
    ctx.restore();
}

// Rita en karta 
function ritaKartan() {
    // Loopa igenom raderna
    for (let rad = 0; rad < 18; rad++) {

        // Loopa igenom kolumnerna
        for (var kol = 0; kol < 20; kol++) {


            //Om "1" hittas ska en klass ritas ut
            var x = kol * 50;
            var y = rad * 50;
            if (karta[rad][kol] == 1) {
                ctx.fillRect(x, y, 50, 50);
            }
        }
    }

}

//Animationsloopen 
function loopen() {
    //Sudda med jämna mellanrum 
    ctx.clearRect(0, 0, 1000, 900);
    // Rita ut allt 

    ritaKartan();

    ritaFigur();

    ritaMonster();  

    ritaMynt(peng);

    ritaMynt(peng1);

    //Hamna på samma ruta som myntet
    plockaMynt(peng);
    plockaMynt(peng1);

    requestAnimationFrame(loopen)
}
loopen();

// Lyssna på piltangenterna 
window.addEventListener("keypress", function (e) {
    console.log(e.code);
    switch (e.code) {
        case "Numpad2": // Pil nedåt trycks
        if (karta[figur.rad + 1][figur.kol] == 0) {
            figur.rad++;    
        }   
            figur.rotation = 180;
            break;
        case "Numpad8": // Pil uppåt trycks
        if (karta[figur.rad - 1][figur.kol] == 0) {
            figur.rad--;
        } 
            figur.rotation = 0;
            break;
        case "Numpad4": // Pil vänster trycks
        if (karta[figur.rad - 1][figur.kol] == 0) {
            figur.kol--;
        }   
            figur.rotation = 270
            break;
        case "Numpad6": // Pil höger trycks
        if (karta[figur.rad + 1][figur.kol] == 0) {
            figur.kol++;
        } 
            figur.rotation = 90;
            break;

    }
    console.log("kol: " + figur.kol + ", rad: " + figur.rad);
})
