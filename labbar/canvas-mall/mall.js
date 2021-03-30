/************************/
/*    Inställningar     */
/************************/

/* Hitta alla element som vi använder */
const canvas = document.querySelector("canvas");

/**************************************************/ 
/* Ställ in den storlek vi kommer använda i canvas */
/**************************************************/ 

canvas.width = 800;
canvas.height = 600;

/* Starta canvas rit api */
var ctx = canvas.getContext("2d");

 /* ********************************* */
/*           Globala variabler       */
/* ********************************* */   
var karta = {
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 1]
    [1, 0, 0, 0, 0, 0, 0, 0, 0, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
    [1, 1, 1, 1, 1, 1, 1, 1, 1, 1]
}

/* ********************************* */
/*           Objekt som syns         */
/* ********************************* */

var piga = {
x : 10, 
y : 5
}

var monster = {
x : 10, 
y : 12
}


/* ********************************* */
/*          Annimationsloopen         */
/* ********************************* */
function loopen() {

   ctx.clearRect(0, 0, 800, 600)
   requestAnimationFrame(loopen); 

}
loopen();

/* ********************************* */
/*          Funktioner               */
/* ********************************* */
//Rita ut pigan 
function ritaPiga() {
    ctx.drawImage(piga.bild, piga.x, piga.y, 50, 50);
}


/* ********************************* */
/*          Interaktion              */
/* ********************************* */

window.addEventListener("keypress", function (e) { //e -> vilken vi trycker ner

    switch (e.code) {
        case "Numpad2":
            piga.y++;
            break;
        case "Numpad4":
            
            break;
        case "Numpad6":
            
            break;
        case "Numpad8":
            
            break;
    
        default:
            break;
    }
})