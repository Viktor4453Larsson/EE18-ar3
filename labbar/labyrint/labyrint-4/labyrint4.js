// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");
const eP = document.querySelector("p");



//Ställ in den storleken du tänker använda
eCanvas.width = 1000;
eCanvas.height = 900;

var kartBild = new Image();
kartBild.src = "./kartbild.png";

//Slå på ritmotorn 
var ctx = eCanvas.getContext("2d");

//Objekt för en karaktär på kartan
var karaktar = {

    bild: new Image(),
    rad: 0,
    i: 0,
    kor: false,
    x: 225,
    y: 200,
}
karaktar.bild.src = "./bilder/kar1.png";


// Skapa kartan 
var karta = [
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 55, 1, 1, 1, 102, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31,
    1, 1, 1, 1, 1, 1, 1, 1, 102, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31,
    1, 1, 1, 1, 1, 7, 8, 9, 102, 102, 1, 1, 1, 1, 55, 1, 1, 1, 1, 1,
    1, 1, 129, 130, 1, 23, 24, 25, 102, 102, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 145, 146, 1, 39, 40, 41, 1, 1, 132, 132, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 129, 130, 1, 1, 1, 1, 1, 1, 132, 132, 1, 1, 1, 83, 83, 1, 1, 1,
    1, 1, 145, 146, 1, 102, 102, 102, 132, 132, 129, 130, 132, 132, 103, 103, 103, 102, 102, 102,
    1, 1, 1, 1, 1, 102, 102, 102, 132, 132, 145, 146, 132, 132, 103, 103, 103, 102, 102, 102,
    102, 102, 102, 102, 102, 102, 102, 102, 1, 1, 132, 132, 1, 1, 1, 83, 83, 102, 102, 101,
    102, 102, 102, 102, 102, 102, 102, 102, 1, 1, 132, 132, 1, 1, 1, 1, 1, 102, 102, 1,
    1, 55, 1, 1, 101, 101, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 102, 102, 1,
    1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 102, 102, 102,
    1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 102, 102, 102,
    1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 102, 55, 1, 1, 1, 1, 1, 1, 1, 1,
    104, 104, 102, 102, 102, 86, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1,
    104, 104, 102, 102, 88, 88, 102, 102, 1, 1, 102, 102, 66, 66, 66, 66, 66, 1, 1, 1,
    1, 55, 1, 1, 1, 1, 1, 1, 1, 1, 102, 102, 71, 72, 71, 73, 71, 1, 1, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1



];

var kartDetaljer = [
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 55, 1, 1, 1, 102, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31,
    1, 1, 1, 1, 1, 1, 1, 1, 102, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31, 31,
    1, 1, 1, 1, 1, 7, 8, 9, 102, 102, 1, 1, 1, 1, 55, 1, 1, 1, 1, 1,
    1, 1, 129, 130, 1, 23, 24, 25, 102, 102, 102, 102, 1, 56, 57, 1, 58, 59, 1, 1,
    1, 1, 145, 146, 1, 39, 40, 41, 1, 1, 132, 132, 1, 56, 57, 1, 56, 57, 1, 1,
    1, 1, 129, 130, 1, 1, 1, 1, 1, 1, 132, 132, 1, 1, 1, 83, 83, 1, 1, 1,
    1, 1, 145, 146, 1, 102, 102, 102, 132, 132, 129, 130, 132, 132, 103, 103, 103, 102, 102, 102,
    1, 1, 1, 1, 1, 102, 102, 102, 132, 132, 145, 146, 132, 132, 103, 103, 103, 102, 102, 102,
    102, 102, 102, 102, 102, 102, 102, 102, 1, 1, 132, 132, 1, 1, 1, 83, 83, 102, 102, 101,
    102, 102, 102, 102, 102, 102, 102, 102, 1, 1, 132, 132, 1, 1, 1, 1, 1, 102, 102, 1,
    1, 55, 1, 1, 101, 101, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 102, 102, 1,
    1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 102, 102, 1, 61, 1, 61, 1, 102, 102, 102,
    1, 50, 50, 50, 1, 1, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 102, 102, 102,
    1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 102, 55, 1, 1, 61, 1, 1, 1, 1, 1,
    104, 104, 102, 102, 102, 86, 102, 102, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1,
    104, 104, 102, 102, 88, 88, 102, 102, 1, 1, 102, 102, 66, 66, 66, 66, 66, 1, 61, 1,
    1, 55, 1, 1, 1, 1, 1, 1, 1, 1, 102, 102, 71, 72, 71, 73, 71, 1, 1, 1,
    1, 1, 1, 1, 50, 50, 50, 1, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1,
    1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 102, 102, 1, 1, 1, 1, 1, 1, 1, 1
];


// Rita ut karaktären med en funktion 
function ritaKaraktar() {
    
    var x = karaktar.i * 64;
    var y = karaktar.rad * 64;


    ctx.drawImage(karaktar.bild, x, y, 64, 64, karaktar.x, karaktar.y, 64, 64);

    if (karaktar.kor) {
        karaktar.i++;
    }


    if (karaktar.kor) {
        karaktar.i += 0.2;
    }
    if (karaktar.i > 4) {
        karaktar.i = 0;
    }
}

// Rita en karta 
function ritaLager() {
    
    //Index i arrayen
    var index = 0;

    for (var rad = 0; rad < 20; rad++) {

        //Loopa igenom kolumnerna
        for (var kol = 0; kol < 20; kol++) {

            //Plocka fram den rätta rutan
            var x = Math.floor(karta[index] % 16 - 1) * 32;
            var y = Math.floor(karta[index] / 16) * 32;


            //ctx.strokeRect(kol * 32, rad * 32    , 32, 32);
            ctx.drawImage(kartBild, x, y, 32, 32, kol * 32, rad * 32, 32, 32)

            // Hoppa till nästa ruta
            index++;
        }
    }

    //Loopa igenom raderna 
}

function ritaDetaljer() {
    
    //Index i arrayen
    var index = 0;

    for (var rad = 0; rad < 20; rad++) {

        //Loopa igenom kolumnerna
        for (var kol = 0; kol < 20; kol++) {

            //Plocka fram den rätta rutan
            var x = Math.floor(kartDetaljer[index] % 16 - 1) * 32;
            var y = Math.floor(kartDetaljer[index] / 16) * 32;


            //ctx.strokeRect(kol * 32, rad * 32    , 32, 32);
            ctx.drawImage(kartBild, x, y, 32, 32, kol * 32, rad * 32, 32, 32)

            // Hoppa till nästa ruta
            index++;
        }
    }
}

//Animationsloopen 
function loopen() {
    //Sudda med jämna mellanrum 
    ctx.clearRect(0, 0, 1000, 900);
    requestAnimationFrame(loopen)
    // Rita ut allt 

    ritaLager();

    ritaDetaljer();

    ritaKaraktar();


}
loopen();
window.addEventListener("keypress", function (e) { //e -> vilken vi trycker ner
    karaktar.kor = true

    switch (e.code) {
        case "KeyS": // Pil nedåt trycks 

            karaktar.y += 100;
            karaktar.rad = 0

            break;
        case "KeyW": // Pil uppåt trycks

            karaktar.y -= 100;
            karaktar.rad = 3;

            break;
        case "KeyA": // Pil vänster trycks
        
            karaktar.x -= 100;
            karaktar.rad = 1

            break;
        case "KeyD": // Pil höger trycks
           
                karaktar.x += 100;
            karaktar.rad = 2

            break;
    }
})
window.addEventListener("keyup", function (e) { //e -> vilken vi trycker ner
    karaktar.kor = false

})