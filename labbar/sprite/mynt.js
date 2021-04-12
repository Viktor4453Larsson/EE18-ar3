/************************/
/*    Inställningar     */
/************************/

const canvas = document.querySelector("canvas");

canvas.width = 800;
canvas.height = 600;

/* Starta canvas rit api */
var ctx = canvas.getContext("2d");

var mynt = new Image();
mynt.src = "./bilder/unnamed.png";

var myntRutor = [0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 2, 2, 2, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 5, 6, 6, 6]; 
var z = 0;

function ritaMynt() {
    /*             första rutan         andra rutan */
    
   ctx.drawImage(mynt, 84 * myntRutor[z], 0, 84, 84, 100, 100, 32, 32);
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

   ritaMynt();

}
loopen();

/* ********************************* */
/*          Funktioner               */
/* ********************************* */



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