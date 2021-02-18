/* Alla element som kommer behöva användas */
const eGeoModal = document.querySelector("#geoModal"); 

/* Stoppa in Boostrap-js modal-bibliotek */
var myModal = new bootstrap.Modal(eGeoModal, function () {
    keyboard: false
});

/* Lyssna på när eGeoModal öppnas */
/* Och byta bort den mot något annat */
eGeoModal.addEventListener("show.bs.modal", function name(params) {
    const eModalBody = document.querySelector(".modal-body");

    /* Ändra innehåll */
    eModalBody.innerHTML = '<div class="mb-3">' +
    '<label for="exampleFormControlInput1" class="form-label">Användarnamn</label>' +
    '<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Sven Larsson">' +
  '</div>' +
  '<div class="mb-3">' +
    '<label for="exampleFormControlTextarea1" class="form-label">Lösenord</label>' +
    '<input class="form-control" id="exampleFormControlTextarea1" rows="3"></input>' +
  '</div>'; 
});