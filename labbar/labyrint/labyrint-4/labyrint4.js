// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");
const eP = document.querySelector("p");



//Ställ in den storleken du tänker använda
eCanvas.width = 1000;
eCanvas.height = 900;

var kartBild = new Image();
kartBild.src = "./tanks_sheet.png";

//Slå på ritmotorn 
var ctx = eCanvas.getContext("2d");

// Skapa kartan 
var karta = [
    [30, 30, 30, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [27, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 28],
    [27, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 28],
    [27, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 28],
    [27, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 28],
    [27, 0, 1, 0, 0, 1, 1, 0, 0, 1, 1, 0, 1, 1, 1, 0, 0, 0, 0, 28],
    [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 1, 0, 1, 1, 1, 28],
    [0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 28],
    [0, 0, 0, 0, 1, 1, 0, 0, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 28],
    [0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 0, 1, 1, 1, 0, 1, 1, 1, 28],
    [27, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 1, 1, 1, 28],
    [27, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 28],
    [27, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 28],
    [27, 0, 1, 1, 1, 1, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 28],
    [27, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 28],
    [27, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 28],
    [30, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [30, 0, 30, 30, 30, 30, 0, 0, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1],
    [30, 0, 0, 0, 0, 0, 0, 1, 1, 0, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1]

];

// Rita en karta 
function ritaKartan() {
    // Loopa igenom raderna
    for (let rad = 0; rad < 18; rad++) {

        // Loopa igenom kolumnerna
        for (var kol = 0; kol < 20; kol++) {


            //Om "1" hittas ska en klass ritas ut
            var x = kol * 50;
            var y = rad * 50;
           

                var x = Math.floor(karta[rad][kol] % 8) * 32;
                var y = Math.floor(karta[rad][kol] / 8) * 32;
                //ctx.fillRect(x, y, 50, 50);
                ctx.drawImage(kartBild, x, y, 32, 32, kol * 50, rad * 50, 50, 50);
            }
        }
    }


//Animationsloopen 
function loopen() {
    //Sudda med jämna mellanrum 
    ctx.clearRect(0, 0, 1000, 900);
    // Rita ut allt 

    ritaKartan();

    requestAnimationFrame(loopen)
}
loopen();