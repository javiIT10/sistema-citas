/* ======================================================================
                            VARIABLES
====================================================================== */

/* <!--==================== ACTIVE LINK SHOW ====================--> */
const sections = document.querySelectorAll("section");

/* <!--==================== SCROLL NAV ====================--> */
const navLinks = document.querySelectorAll(".nav-link");

/* <!--==================== NAVEGATION ====================--> */
const navMenu = document.getElementById("nav-menu");
const navToggle = document.getElementById("nav-toggle");
const navClose = document.getElementById("nav-close");

/* ======================================================================
                            EVENT LISTENERS
====================================================================== */

/* <!--==================== ACTIVE LINK SHOW ====================--> */
showLinkActive();

/* <!--==================== SCROLL NAV ====================--> */
scrollNav();

/* <!--==================== NAVEGATION ====================--> */
if (navToggle) {
  navToggle.addEventListener("click", () => {
    navMenu.classList.add("right-0");
    navMenu.classList.remove("-right-full");
  });
}

if (navClose) {
  navClose.addEventListener("click", () => {
    navMenu.classList.add("-right-full");
    navMenu.classList.remove("right-0");
  });
}

/* ======================================================================
                            FUNCIONES
====================================================================== */

/* <!--==================== ACTIVE LINK SHOW ====================--> */
function showLinkActive() {
  document.addEventListener("scroll", (e) => {
    let actual = "";
    sections.forEach((section) => {
      const sectioTop = section.offsetTop;
      const sectionHeight = section.clientHeight;

      if (window.scrollY >= sectioTop - sectionHeight / 3) {
        actual = section.id;
      }
    });

    navLinks.forEach((link) => {
      link.classList.remove("active-link");
      if (link.getAttribute("href") === "#" + actual) {
        link.classList.add("active-link");
      }
    });
  });
}

/* <!--==================== SCROLL NAV ====================--> */
function scrollNav() {
  navLinks.forEach((link) => {
    link.addEventListener("click", (e) => {
      // Prevenir comportamiento por defecto
      e.preventDefault();

      // Obtener seccion
      const sectionScroll = e.target.getAttribute("href");
      const section = document.querySelector(sectionScroll);

      // Cerrar navegacion movil
      navMenu.classList.add("-right-full");
      navMenu.classList.remove("right-0");

      // Dirigir a la seccion
      section.scrollIntoView({ behavior: "smooth" });
    });
  });
}

/* <!--==================== NAVEGATION ====================--> */
function scrollHeader() {
  const header = document.getElementById("header");
  if (this.scrollY >= 80) header.classList.add("scroll-header");
  else header.classList.remove("scroll-header");
}
window.addEventListener("scroll", scrollHeader);
