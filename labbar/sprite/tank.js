/************************/
/*    Inställningar     */
/************************/

const canvas = document.querySelector("canvas");

canvas.width = 800;
canvas.height = 600;

/* Starta canvas rit api */
var ctx = canvas.getContext("2d");

var tank = new Image();
tank.src = "./bilder/tanksheet.png";

var tankRutor = [0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6]; 
var i = 0;

 function ritaTank() {
    /*             första rutan         andra rutan */
    
   ctx.drawImage(tank, 32 * tankRutor[i], 0, 32, 32, 100, 100, 32, 32);
   // Hoppa till nästa 
   if (i > tankRutor.length - 1) {
       i = 0
   }
   i++;
}

var mynt = new Image();
mynt.src = "./bilder/unnamed.png";

var myntRutor = [0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6]; 
var z = 0;

function ritaMynt() {
    /*             första rutan         andra rutan */
    
   ctx.drawImage(mynt, 32 * myntRutor[z], 0, 32, 32, 100, 100, 32, 32);
   // Hoppa till nästa 
   if (z > myntRutor.length - 1) {
       z = 0
   }
   z++;
}


/* ********************************* */
/*          Annimationsloopen        */
/* ********************************* */
function loopen() {

   ctx.clearRect(0, 0, 800, 600)
   requestAnimationFrame(loopen); 

   ritaTank();

   ritaMynt();

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