/* ======================================================================
                            VARIABLES
====================================================================== */

/* <!--==================== URLs para AJAX ====================--> */
const urlPrincipal = document.querySelector("#urlPrincipal").value;
const urlServidor = document.querySelector("#urlServidor").value;

/* <!--==================== MODALES LOGIN & REGISTER ====================--> */
const btnsLogin = document.querySelectorAll(".btn-login");
const btnRegister = document.querySelector(".btn-register");

const modalLogin = document.querySelector("#modalLogin");
const modalRegister = document.querySelector("#modalRegister");

const closeLogin = document.querySelector("#closeLogin");
const closeRegister = document.querySelector("#closeRegsiter");

/* <!--==================== MODAL ESPECIALISTAS ====================--> */
const cardsServices = document.querySelectorAll(".card-services");

const modalServices = document.querySelector("#modalServices");
const closeServices = document.querySelector("#closeServices");

const inputIdEspecialista = document.querySelector('[name="idEspecialista"]');
const inputImgEspecialista = document.querySelector('[name="imgEspecialista"]');
const inputNombreEspecialista = document.querySelector(
  '[name="nombreEspecialista"]'
);

/* ======================================================================
                            EVENT LISTENERS
====================================================================== */

/* <!--==================== MODALES LOGIN & REGISTER ====================--> */
if (btnsLogin) {
  btnsLogin.forEach((btn) => {
    btn.addEventListener("click", (e) => {
      // Prevenir accion por defecto
      e.preventDefault();

      // limmpiar modal de registro
      ocultarModal(modalRegister);

      // Abrir modal de login
      mostrarModal(modalLogin);
    });
  });
}

if (btnRegister) {
  btnRegister.addEventListener("click", (e) => {
    // Prevenir accion por defecto
    e.preventDefault();

    // Ocultar modal de login
    ocultarModal(modalLogin);

    // Mostrar modal de registro
    mostrarModal(modalRegister);
  });
}

if (closeLogin) {
  closeLogin.addEventListener("click", () => {
    // Ocultar modal de login
    ocultarModal(modalLogin);
  });
}

if (closeRegister) {
  closeRegister.addEventListener("click", () => {
    // Ocultar modal de login
    ocultarModal(modalRegister);
  });
}

/* <!--==================== MODAL ESPECIALISTAS ====================--> */
if (cardsServices) {
  cardsServices.forEach((card) => {
    card.addEventListener("click", function (e) {
      // Prevenir comportamiento por defecto
      e.preventDefault();

      // Borrar tarjeta seleccionada
      eliminarActive();

      // Seleccionar tarejta
      card.classList.add("card-active");

      card.querySelector(
        "a"
      ).innerHTML = `Seleccionado <i class="ri-tooth-line transition-transform duration-300 button__icon"></i>`;

      // Guardar el id del servicio seleccionado
      inputIdEspecialista.value = e.target.getAttribute("especialista-id");
      inputImgEspecialista.value = e.target.getAttribute("especialista-img");
      inputNombreEspecialista.value = e.target.getAttribute(
        "especialista-nombre"
      );

      //Mostrar Modal
      mostrarModal(modalServices);
    });
  });
}

if (closeServices) {
  closeServices.addEventListener("click", () => {
    // Ocultar modal de especialistas
    ocultarModal(modalServices);
  });
}

/* ======================================================================
                            FUNCIONES
====================================================================== */

/* <!--==================== MODALES LOGIN & REGISTER ====================--> */
function mostrarModal(reference) {
  reference.classList.add("show-modal");
  document.body.classList.add("overflow-hidden");
}

function ocultarModal(reference) {
  reference.classList.remove("show-modal");
  document.body.classList.remove("overflow-hidden");
}

/* <!--==================== MODAL ESPECIALISTAS ====================--> */
function eliminarActive() {
  cardsServices.forEach((card) => {
    card.classList.remove("card-active");
    card.querySelector(
      "a"
    ).innerHTML = `Seleccionar especialista <i class="ri-tooth-line transition-transform duration-300 button__icon"></i>`;
  });
}

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
  origin: "top",
  distance: "60px",
  duration: 1500,
  delay: 300,
  /* reset: true, */
});

sr.reveal(`.value-card, .category-card, .footer`, { interval: 100 });

sr.reveal(
  `.about-img, .home-img, .contact-info, .perfil-info, .especialista-container`,
  {
    origin: "left",
  }
);

sr.reveal(`.about-data, .home-data, .contact-form, .citas-info`, {
  origin: "right",
});
