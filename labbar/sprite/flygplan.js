/************************/
/*    Inställningar     */
/************************/

const canvas = document.querySelector("canvas");

canvas.width = 800;
canvas.height = 600;

/* Starta canvas rit api */
var ctx = canvas.getContext("2d");

var plan = new Image();
plan.src = "./spritelib-gpl/shooter/1945.png";

var flygplansRutor = [4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 4, 5, 5, 5, 6, 6, 6, 7, 7, 7, 7, 7, 8, 8, 8, 8, 9, 9, 9, 9, 10, 10, 10, 10, 11, 11, 11, 11, 11, 12, 12, 12, 12]; 
var z = 0;

function ritaFlygplan() {
    /*             första rutan         andra rutan */
    
   ctx.drawImage(plan, 10 * flygplansRutor[z], 4, 32, 32, 350, 150, 64, 64);
   // Hoppa till nästa 
   if (z > flygplansRutor.length - 1) {
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

   ritaFlygplan();

}
loopen();

/* ********************************* */
/*          Funktioner               */
/* ********************************* */

