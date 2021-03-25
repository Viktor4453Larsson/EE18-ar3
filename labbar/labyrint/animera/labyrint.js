// Skriva ut alla element som vi använder
const eCanvas = document.querySelector("canvas");

//Ställ in den storleken du tänker använda
eCanvas.width = 600;
eCanvas.height = 500;

//Slå på ritmotorn 
var ctx = eCanvas.getContext("2d");

//Figur i ett objekt 
var figur = {
    x : 100, 
    y : 100, 
    rotation: 0,
    bild: new Image()
}
figur.bild.src = "../bilder/nyckelpiga.png";

//Animationsloopen 
function loopen() {
    //Sudda med jämna mellanrum 
    ctx.clearRect(0, 0, 600, 500);
    // Rita ut allt
    ctx.drawImage(figur.bild, figur.x, figur.y, 50, 50);

    requestAnimationFrame(loopen)
}
loopen();

// Lyssna på piltangenterna 
window.addEventListener("keypress", function (e) {
    console.log(e.code);
    switch (e.code) {
        case "Numpad2": // Pil nedåt trycks
           
            if (figur.y < 150) {
                figur.y += 50;
            }
            break;
        case "Numpad8": // Pil uppåt trycks
        if (figur.y < 100) {
            figur.y -= 50;
        }
        
            break;
        case "Numpad4": // Pil vänster trycks
        if (figur.x < 100) {
            figur.x -= 50;
        }
            
            break;
        case "Numpad6": // Pil höger trycks
        if (figur.x < 550) {
            figur.x += 50;
        }
            
            break;
           
    }
    console.log("coll: " + figur.x / 50 + ", row: " + figur.y / 50);
})