// Alla element som vi använder 
const eP = document.querySelector("p");

const canvas = document.querySelector("canvas");




// Ställ in bredd och höjden på canvas
canvas.width = 800;
canvas.height = 600;

// Rita motorn
var ctx = canvas.getContext("2d");

// Ladda alla bilderna här
var background = new Image();
background.src = "./bilder/a3b098d803dc75e2b64dab29b66b0d61.jpg";

var character1 = new Image();
character1.src = "./bilder/karaktar1.png";

var character2 = new Image();
character2.src = "./bilder/karaktar2.png";



// Figurernas position i spelet
var character1X = 125 * Math.random(); var character1Y = 100 * Math.random();
var character2X = 600 * Math.random(); var character2Y = 400 * Math.random();


// Loopen 
var poang = 0;
var hinderX = 700 * Math.random();
var HinderY = 700 * Math.random();

function loopen() {

    ctx.clearRect(0, 0, 800, 600);

    // Rita grafiken 
    ctx.drawImage(character1, character1X, character1Y, 50, 50);
    ctx.drawImage(character2, character2X, character2Y, 50, 50);
    ctx.fillRect(hinderX, HinderY, 100, 100);

    // Kollision 
    var d = Math.sqrt((character2Y - character1Y) ** 2 + (character2X - character1X) ** 2);

    ritaHinder(hinderX, HinderY)

    hinderX += 2;
    HinderY += 2;




    console.log(poang);

    //När figurerna träffar spawna om den andra figuren
    if (d < 50) {
        character1X = 125 * Math.random();
        character1Y = 100 * Math.random();
        poang++;
        console.log(poang);
        eP.textContent = poang;
    }

    requestAnimationFrame(loopen);

}
loopen();

// Lyssna av tangenterna
window.addEventListener("keydown", function (e) {
    console.log(e.code);


    // Tangenten vi anger gör olika saker
    switch (e.keyCode) {
        case 104: //Numpad8
            //Om det är större än 0
            if (character2Y > 0) {
                character2Y -= 10;
            }

            break;
        case 101: //Numpad5
            //Om det är mindre än 600
            if (character2Y < 550) {
                character2Y += 10;
            }

            break;
        case 100: //Numpad4
            //Om värdet är större än 0
            if (character2X > 0) {
                character2X -= 10;
            }

            break;
        case 102: //Numpad6
            // Om värdet är mindre än 800
            if (character2X < 750) {
                character2X += 10;
            }

            break;


    }
})

/*canvas.addEventListener("mousemove", function (e) {
    console.log(e.offsetX, e.offsetY);
    character1X = e.offsetX;
    character1Y = e.offsetY;
})*/


