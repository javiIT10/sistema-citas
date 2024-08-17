/* ======================================================================
                            VARIABLES
====================================================================== */

const cardsServices = document.querySelectorAll(".card-services");
const modalServices = document.querySelector("#modalServices");
const closeModal = document.querySelector("#closeModal");
const inputServicio = document.querySelector('[name="servicio"]');

/* ======================================================================
                            EVENT LISTENERS
====================================================================== */

if (cardsServices) {
  cardsServices.forEach((card) => {
    card.addEventListener("click", function (e) {
      e.preventDefault();

      // Borrar tarjeta seleccionada
      eliminarActive();

      // Seleccionar tarejta
      card.classList.add("card-active");
      card.querySelector("a").textContent = "Seleccionado";

      // Guardar el id del servicio seleccionado
      inputServicio.value = e.target.getAttribute("service-id");

      //Mostrar Modal
      mostrarModal(modalServices);
    });
  });
}

if (closeModal) {
  closeModal.addEventListener("click", () => {
    ocultarModal(modalServices);
  });
}

/* ======================================================================
                            FUNCIONES
===================================================================== */

function eliminarActive() {
  cardsServices.forEach((card) => {
    card.classList.remove("card-active");
    card.querySelector("a").textContent = "Seleccionar servicio";
  });
}

function mostrarModal(reference) {
  reference.classList.add("show-modal");
  document.body.classList.add("overflow-hidden");
}

function ocultarModal(reference) {
  reference.classList.remove("show-modal");
  document.body.classList.remove("overflow-hidden");
}
