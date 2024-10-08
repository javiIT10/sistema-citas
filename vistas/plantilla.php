<?php

$ruta = ControladorRuta::ctrRuta();
$servidor = ControladorRuta::ctrServidor();

const CLIENT_ID = "AdUmmmxh4xqvUZrlXdVplUQ8u63JcftnTm-cEz60d06vGdHthw4Sjl9Lk7DazPCsZY7Gld9Uqw6xysWO";
const CURRENCY = "MXN";

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

  <!-- SWEET ALERT 2 -->
  <!-- https://sweetalert2.github.io/ -->
  <script src="assets/js/plugins/sweetalert2.all.js"></script>

  <!-- Fullcalendar -->
  <script src="assets/js/plugins/fullcalendar.global.min.js"></script>

  <!-- Paypal SDK -->
  <script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID; ?>&currency=<?php echo CURRENCY; ?>"></script>

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

      $rutaEspecialidades = ControladorEspecialidades::ctrMostrarEspecialidades();

      $validarRuta = "";

      foreach ($rutaEspecialidades as $clave => $valor) {

        if ($_GET["pagina"] == $valor["especialidad_ruta"]) {

          $validarRuta = "especialistas";
        }
      }

      if ($_GET["pagina"] == "citas" || $_GET["pagina"] == "perfil") {

        include "paginas/" . $_GET["pagina"] . ".php";
      } else if ($validarRuta != "") {

        include "paginas/especialistas.php";
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
  include "paginas/componentes/modal-especialistas.php"

  ?>

  <!--==================== FOOTER ====================-->

  <?php
  include "paginas/componentes/pie-pagina.php"
  ?>

  <input type="hidden" value="<?php echo $ruta; ?>" id="urlPrincipal">
  <input type="hidden" value="<?php echo $servidor; ?>" id="urlServidor">


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
  <script src="assets/js/plantilla.js"></script>
  <script src="assets/js/citas.js"></script>
</body>

</html>