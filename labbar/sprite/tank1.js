/************************/
/*    Inställningar     */
/************************/

const canvas = document.querySelector("canvas");

canvas.width = 800;
canvas.height = 600;

/* Starta canvas rit api */
var ctx = canvas.getContext("2d");






/*
var tankRutor = [1, 2, 3, 4, 5, 6, 7];
var i = 0;
var kör = false;
var tankX = 100, tankY = 100, rotation = 0;
 */
var explosion = [17, 18, 19];
var j = 0;

var tank = {
    bild: new Image(),
    rutor: [1, 2, 3, 4, 5, 6, 7, 8],
    i: 0,
    kör: false,
    x: 100, 
    y: 100, 
    rotation: 0
    
 }
 tank.bild.src = "./bilder/tanks_sheet.png";




function ritaTank() {
    /*             första rutan         andra rutan */
    var x = Math.floor(tank.rutor[Math.floor(tank.i)] % 8) * 32;
    var y = Math.floor(tank.rutor[Math.floor(tank.i)] / 8) * 32;

    ctx.save();
    ctx.translate(tank.x, tank.y);
    ctx.rotate(tank.rotation / 180 * Math.PI);
    ctx.drawImage(tank.bild, x, y, 32, 32, -16, -16, 32, 32);
    ctx.restore();  

    if (tank.kör) {
        tank.i += 0.2;
    }
    if (tank.i > tank.rutor.length) {
        tank.i = 0;
    }

}

function ritaExplosion() {
    /*             första rutan         andra rutan */
    var x = Math.floor(explosion[Math.floor(j)] % 8) * 32;
    var y = Math.floor(explosion[Math.floor(j)] / 8) * 32;
    ctx.drawImage(tank.bild, x, y, 32, 32, 200, 100, 32, 32);
    
    // Hoppa till nästa 

    j += 0.2;
    if (j > explosion.length) {
        j = 0
    }
    if (tank.kör) {
        j += 0.4;
    }

}

/* ********************************* */
/*          Annimationsloopen        */
/* ********************************* */
function loopen() {

    ctx.clearRect(0, 0, 800, 600)
    requestAnimationFrame(loopen);

    ritaTank();

    ritaExplosion();


}
loopen();
window.addEventListener("keypress", function (e) { //e -> vilken vi trycker ner
    tank.kör = true

    switch (e.code) {
        case "ArrowDown": // Pil nedåt trycks   
            tank.y += 50;
            tank.rotation = 180;
            break;
        case "ArrowUp": // Pil uppåt trycks
            tank.y -= 50;
            tank.rotation = 0;
            break;
        case "ArrowLeft": // Pil vänster trycks
            tank.x -= 50;
            tank.rotation = 270
            break;
        case "ArrowRight": // Pil höger trycks
            tank.x += 50;
            tank.rotation = 90;
            break;
    }
})
window.addEventListener("keyup", function (e) { //e -> vilken vi trycker ner
    tank.kör = false

})
