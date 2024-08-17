<?php

$ruta = ControladorRuta::ctrRuta();
$servidor = ControladorRuta::ctrServidor();

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <base href="vistas/" />

  <!-- Title -->
  <title>OrthoCenter | Inicio</title>

  <!-- Favicon -->
  <link
    rel="shortcut icon"
    href="assets/img/logos/logo.ico"
    type="image/x-icon" />

  <!--==================== CSS ====================-->

  <!-- Remixicons -->
  <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet" />

  <!-- Estilos personalizados css -->
  <link rel="stylesheet" href="assets/css/build-styles.css" />

  <!--==================== JAVASCRIPT ====================-->

  <!-- Fullcalendar -->
  <script src="assets/js/plugins/fullcalendar.global.min.js"></script>

</head>

<body class="font-poppins">

  <!--==================== HEADER ====================-->

  <?php
  include "paginas/componentes/cabecera.php";
  ?>

  <!--=============== PAGINAS ===============-->

  <main class="overflow-hidden">

    <?php
    if (isset($_GET["pagina"])) {


      if ($_GET["pagina"] == "servicios") {

        include "paginas/servicios.php";
      }

      if ($_GET["pagina"] == "citas") {

        include "paginas/citas.php";
      }

      if ($_GET["pagina"] == "perfil") {

        include "paginas/perfil.php";
      }
    } else {

      include "paginas/inicio.php";
    }
    ?>

  </main>

  <!--=============== MODALES ===============-->

  <?php

  include "paginas/componentes/modal-login.php";
  include "paginas/componentes/modal-registro.php";
  include "paginas/componentes/modal-servicios.php"

  ?>

  <!--==================== FOOTER ====================-->

  <?php
  include "paginas/componentes/pie-pagina.php"
  ?>


  <!--==================== JAVASCRIPT ====================-->

  <!-- Scrollreveal -->
  <script src="assets/js/plugins/scrollreveal.min.js"></script>

  <!-- Js personalizado -->
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/citas.js"></script>
  <script src="assets/js/plantilla.js"></script>
</body>

</html>