// MommentJS asignar zona
$.datetimepicker.setLocale("es");
moment.locale("es");
/* <!--==================== DATETIMEPICKER ====================--> */

$('[name="fechaSeleccionada"]').datetimepicker({
  format: "Y-m-d H:00:00",
  minDate: 0,
  defaultTime: moment().add(1, "hours").format("HH:00"),
  allowTimes: [
    "08:00",
    "09:00",
    "10:00",
    "11:00",
    "13:00",
    "14:00",
    "15:00",
    "16:00",
    "17:00",
    "18:00",
    "19:00",
    "20:00",
  ],
  minDate: 0,
  disabledWeekDays: [0],
});

/* <!--==================== GENERAR CODIGO DE LA CITA ====================--> */

const caracteres = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";

function codigoAleatorio(caracteres, length) {
  codigo = "";

  for (let i = 0; i < length; i++) {
    rand = Math.floor(Math.random() * caracteres.length);
    codigo += caracteres.substr(rand, 1);
  }

  return codigo;
}

/* <!--==================== INFORMACION DE LA CITA ====================--> */

function mostrarDatosCita() {
  // Mostramos la seccion donde estaran los datos
  mostrarSeccion("#datosCita");

  // Generamos el codigo de la cita
  const codigoCita = codigoAleatorio(caracteres, 10);

  // Solicitamos la informacion a servidor
  const datos = new FormData();
  datos.append("codigoCita", codigoCita);

  $.ajax({
    url: urlPrincipal + "ajax/citas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      if (!respuesta) {
        const inputCodigoCita = document.querySelector('[name="codigoCita"]');
        const btnPagarCita = document.querySelector("#btnPagarCita");
        btnPagarCita.setAttribute("codigoCita", codigoCita);
        inputCodigoCita.value = codigoCita;
      } else {
        const inputCodigoCita = document.querySelector('[name="codigoCita"]');
        const btnPagarCita = document.querySelector("#btnPagarCita");
        btnPagarCita.setAttribute(
          "codigoCita",
          codigoCita + codigoAleatorio(caracteres, 3)
        );
        inputCodigoCita.value = codigoCita + codigoAleatorio(caracteres, 3);
      }
    },
  });
}

function mostrarSeccion(referencia) {
  const seccion = document.querySelector(referencia);
  seccion.classList.add("flex");
  seccion.classList.remove("hidden");
}

function ocultarSeccion(referencia) {
  const seccion = document.querySelector(referencia);
  seccion.classList.remove("flex");
  seccion.classList.add("hidden");
}

/* <!--==================== CITAS ====================--> */

const calendarEl = document.getElementById("calendar");
const infoCitas = document.querySelector("#infoCitas");

if (infoCitas) {
  const idEspecialista = infoCitas.getAttribute("idEspecialista");
  const fechaCita = infoCitas.getAttribute("fechaCita");

  const totalEventos = [];
  const opcion1 = [];
  let validarDisponibilidad = false;

  const datos = new FormData();
  datos.append("idEspecialista", idEspecialista);

  $.ajax({
    url: urlPrincipal + "ajax/citas.ajax.php",
    method: "POST",
    data: datos,
    cache: false,
    contentType: false,
    processData: false,
    dataType: "json",
    success: function (respuesta) {
      if (respuesta.length == 0) {
        /* <!--==================== HAY DISPONIBILIDAD EN LA AGENDA ====================--> */
        const calendar = new FullCalendar.Calendar(calendarEl, {
          locale: "es",
          height: 317,
          hiddenDays: [0],

          slotLabelFormat: {
            hour: "numeric",
            minute: "2-digit",
            omitZeroMinute: false,
            meridiem: "short",
          },

          initialView: "timeGridFourDay",
          initialDate: moment(fechaCita).format("YYYY-MM-DD"),
          allDaySlot: false,

          slotDuration: "01:00:00",
          slotMinTime: "08:00:00",
          slotMaxTime: "22:00:00",
          scrollTime: moment(fechaCita).format("HH:00:00"),

          titleFormat: { year: "numeric", month: "short", day: "numeric" },
          views: {
            timeGridFourDay: {
              type: "timeGrid",
              duration: { days: 4 },
            },
          },
          events: [
            {
              title: "Tu cita",
              start: moment(fechaCita).format("YYYY-MM-DD HH:00:00"),
              end: moment(fechaCita)
                .add(1, "hours")
                .format("YYYY-MM-DD HH:00:00"),
              backgroundColor: "#028FA2",
              borderColor: "#028FA2",
            },
          ],
        });
        calendar.render();

        // Mostrar datos de la cita
        mostrarDatosCita();
      } else {
        /* <!--==================== VALIDAR CRUCE DE FECHAS ====================--> */
        for (let i = 0; i < respuesta.length; i++) {
          // Validar si la fecha coincide en la base de datos
          if (fechaCita == respuesta[i]["fechaCita"]) {
            opcion1[i] = false;
          } else {
            opcion1[i] = true;
          }

          /* <!--==================== VALIDAR DISPONIBILIDAD ====================--> */
          if (opcion1[i] == false) {
            validarDisponibilidad = false;
          } else {
            validarDisponibilidad = true;
          }

          if (!validarDisponibilidad) {
            // Mostramos los datos traidos de la base de datos
            totalEventos.push({
              title: "Ocupado",
              start: moment(respuesta[i]["fechaCita"]).format(
                "YYYY-MM-DD HH:00:00"
              ),
              end: moment(respuesta[i]["fechaCita"])
                .add(1, "hours")
                .format("YYYY-MM-DD HH:00:00"),
              backgroundColor: "#252728",
              borderColor: "#252728",
            });

            // Mostrar mensaje de no disponible
            const infoDisponibilidad = document.querySelector(
              "#infoDisponibilidad"
            );
            infoDisponibilidad.textContent = "¡No disponible!";

            // Ocultar seccion de datos
            ocultarSeccion("#datosCita");

            // Mostrar formulario para cambio de fecha
            const formNoDisponible =
              document.querySelector("#formNoDisponible");
            formNoDisponible.classList.remove("hidden");
            formNoDisponible.classList.add("flex");
            break;
          } else {
            // Mostramos los datos traidos de la base de datos
            totalEventos.push({
              title: "Ocupado",
              start: moment(respuesta[i]["fechaCita"]).format(
                "YYYY-MM-DD HH:00:00"
              ),
              end: moment(respuesta[i]["fechaCita"])
                .add(1, "hours")
                .format("YYYY-MM-DD HH:00:00"),
              backgroundColor: "#252728",
              borderColor: "#252728",
            });
          }

          // Mostrar datos de la cita
          mostrarDatosCita();
        }

        if (validarDisponibilidad) {
          totalEventos.push({
            title: "Tu cita",
            start: moment(fechaCita).format("YYYY-MM-DD HH:00:00"),
            end: moment(fechaCita)
              .add(1, "hours")
              .format("YYYY-MM-DD HH:00:00"),
            backgroundColor: "#028FA2",
            borderColor: "#028FA2",
          });
        }

        /* <!--==================== MOSTRAR CALENDARIO CON EVENTOS ====================--> */
        const calendar = new FullCalendar.Calendar(calendarEl, {
          locale: "es",
          height: 317,
          hiddenDays: [0],

          slotLabelFormat: {
            hour: "numeric",
            minute: "2-digit",
            omitZeroMinute: false,
            meridiem: "short",
          },

          initialView: "timeGridFourDay",
          initialDate: moment(fechaCita).format("YYYY-MM-DD"),
          allDaySlot: false,

          slotDuration: "01:00:00",
          slotMinTime: "08:00:00",
          slotMaxTime: "22:00:00",
          scrollTime: moment(fechaCita).format("HH:00:00"),

          titleFormat: { year: "numeric", month: "short", day: "numeric" },
          views: {
            timeGridFourDay: {
              type: "timeGrid",
              duration: { days: 4 },
            },
          },
          events: totalEventos,
        });
        calendar.render();
      }
    },
  });
}

/* <!--==================== FUNCION GENERAR COOKIE ====================--> */

function crearCookie(cookieNombre, cookieValor, cookieDiasExpedicion) {
  const hoy = new Date();

  hoy.setTime(hoy.getTime() + cookieDiasExpedicion * 24 * 60 * 60 * 1000);

  const diaExpedicion = "expires=" + hoy.toUTCString();

  document.cookie = cookieNombre + "=" + cookieValor + "; " + diaExpedicion;
}

/* <!--==================== CAPTURAR DATOS DE LA CITA ====================--> */

const btnPagarCita = document.querySelector("#btnPagarCita");

if (btnPagarCita) {
  btnPagarCita.addEventListener("click", function (e) {
    // Guardamos los datos de la cita
    const idEspecialista = this.getAttribute("idEspecialista");
    const imgEspecialista = this.getAttribute("imgEspecialista");
    const nombreEspecialista = this.getAttribute("nombreEspecialista").trim();
    const fechaCita = this.getAttribute("fechaCita");
    const codigoCita = this.getAttribute("codigoCita");
    const pagoCita = this.getAttribute("pagoCita");

    // Generamos la cookies de la cita
    crearCookie("idEspecialista", idEspecialista, 1);
    crearCookie("imgEspecialista", imgEspecialista, 1);
    crearCookie("nombreEspecialista", nombreEspecialista, 1);
    crearCookie("fechaCita", fechaCita, 1);
    crearCookie("codigoCita", codigoCita, 1);
    crearCookie("pagoCita", pagoCita, 1);
  });
}
