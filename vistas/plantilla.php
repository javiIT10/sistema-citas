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

  <!-- DateTimePicker -->
  <link rel="stylesheet" href="assets/css/plugins/jquery.datetimepicker.min.css" />

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

      $rutacategorias = ControladorCategorias::ctrMostrarCategorias();

      $validarRuta = "";

      foreach ($rutacategorias as $clave => $valor) {

        if ($_GET["pagina"] == $valor["ruta"]) {

          $validarRuta = "servicios";
        }
      }

      if ($_GET["pagina"] == "citas" || $_GET["pagina"] == "perfil") {

        include "paginas/" . $_GET["pagina"] . ".php";
      } else if ($validarRuta != "") {

        include "paginas/servicios.php";
      } else {

        echo '<script>
        window.location = "' . $ruta . '"
        </script>';
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

  <!-- JQuery -->
  <script src="assets/js/plugins/jquery-3.7.1.min.js"></script>

  <!-- Momentjs -->
  <script src="assets/js/plugins/moment.js"></script>

  <!-- DateTimePicker -->
  <script src="assets/js/plugins/jquery.datetimepicker.full.min.js"></script>

  <!-- Js personalizado -->
  <script src="assets/js/menu.js"></script>
  <script src="assets/js/citas.js"></script>
  <script src="assets/js/plantilla.js"></script>
</body>

</html>