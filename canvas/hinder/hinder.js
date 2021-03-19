// Element som vi använder
const canvas = document.querySelector("canvas");
console.log(canvas);
//Ritmotor
var ctx = canvas.getContext("2d");
console.log(ctx)

// Ange mått på canvas

canvas.width = 800;
canvas.height = 600;

/*
// Ladda in bilden
var duck = new Image();
duck.src = "./bilder/anatine-icon.png";

// Position på ankan
//Sidlädd 
var duckX = 200;
//Upp och ned
var duckY = 600;
*/

// Detta är ankans egenskaper
var duck = {
    x: 200,
    y: 400, 
    bild: new Image()

}
// Ladda in bilden
duck.bild.src = "./bilder/anatine-icon.png";


// Hinder 
var hinder = {
    x: 800 * Math.random(),
    y: 600 * Math.random()

}

function loopen() {

    ctx.clearRect(0, 0, 800, 600);

    // Rita ut figuren 
    ctx.drawImage(duck.bild, duck.x, duck.y);

    // Rita hindret 
    ctx.fillRect(hinder.x, hinder.y, 100, 100);
    
    requestAnimationFrame(loopen)
}
loopen();

// Lyssna på piltangenterna 
window.addEventListener("keydown", function (e) {
    console.log(e.code);

    // Vad som kommer hända när vi trycker ner en viss tangent
    switch (e.code) {
        case "Numpad8":
            if (duck.y > 10) {
                if (duck.y < hinder.y + 70) {
                    duck.y -= 10;
                }
                
            }
            console.log(duck.x, duck.y);
            break;
        case "Numpad5":
            if (duck.y < 530) {
                if (duck.y < hinder.y - 70) {
                    duck.y += 10; 
                }
                
            }
            console.log(duck.x, duck.y);
            
            break;
        case "Numpad4":
            if (duck.x > 10) {
                if (duck.x < hinder.x + 70) {
                    duck.x -= 10;  
                }
                 
            }
            console.log(duck.x, duck.y);
            
            break;
        case "Numpad6":
            //Inte krocka med väggen
            if (duck.x < 740) {
                //Är ankan i samma höjd som hindret?
                if (duck.y + 70 < hinder.y + 70 &&  duck.y > hinder.y + 100) {
                    
                    //Inte krocka med hindrests vänsterkant
                if (duck.x < hinder.x - 70) {
                    duck.x += 10;
                } 
                }
                
            }
            console.log(duck.x, duck.y, hinder.x, hinder.y);
            break;
    }
})


