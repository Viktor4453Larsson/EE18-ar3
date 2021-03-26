// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");

//Ställ in den storleken du tänker använda
eCanvas.width = 1000;
eCanvas.height = 900;

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

//Figur i ett objekt 
var figur = {
    x: 475,
    y: 25,
    rotation: 0,
    bild: new Image()
}
figur.bild.src = "../bilder/nyckelpiga.png";

//Rita ut figuren
function ritaFigur() {
    ctx.save();
    ctx.translate(figur.x, figur.y);
    ctx.rotate(figur.rotation / 180 * Math.PI);
    ctx.drawImage(figur.bild, -25, -25, 50, 50);
    ctx.restore();
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
    ctx.clearRect(0, 0, 1000, 900);
    // Rita ut allt 

    ritaKartan();

    ritaFigur();

    requestAnimationFrame(loopen)
}
loopen();

// Lyssna på piltangenterna 
window.addEventListener("keypress", function (e) {
    console.log(e.code);
    switch (e.code) {
        case "Numpad2": // Pil nedåt trycks   
            figur.y += 50;
            figur.rotation = 180;
            break;
        case "Numpad8": // Pil uppåt trycks
            figur.y -= 50;
            figur.rotation = 0;
            break;
        case "Numpad4": // Pil vänster trycks
            figur.x -= 50;
            figur.rotation = 270
            break;
        case "Numpad6": // Pil höger trycks
            figur.x += 50;
            figur.rotation = 90;
            break;

    }
    console.log("coll: " + (figur.x - 25) / 50 + ", row: " + (figur.y - 25) / 50);
})
