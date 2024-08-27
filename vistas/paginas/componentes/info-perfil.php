<!--==================== INFO PERFIL ====================-->

<section class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
    <div class="w-full mx-auto grid grid-cols-1 tablet:grid-cols-3 gap-10">
        <div class="grid gap-6 w-full">

            <div class="flex items-center justify-center gap-4">
                <img src="assets/img/usuario.png" alt="imagen usuario" class="h-12 w-12  tablet:h-16 tablet:w-16">
                <div class="grid gap-1">
                    <h3 class="text-title-color text-xl font-semibold">John Doe</h3>
                    <p class="text-text-color">johndoe@example.com</p>
                </div>
            </div>

            <div class="mt-6 flex flex-col gap-2">
                <button class="button bg-title-color/80 hover:bg-title-color items-center gap-x-2 w-full mt-4 justify-center text-sm">
                    Cambiar contraseña
                    <i class="ri-key-2-line transition-transform duration-[400ms] button__icon"></i>
                </button>
                <button class="button bg-red-600 hover:bg-red-700 items-center gap-x-2 w-full mt-4 justify-center shadow-input-valid text-sm">
                    Cerrar sesión
                    <i class="ri-logout-box-line transition-transform duration-[400ms] button__icon"></i>
                </button>
            </div>

        </div>

        <div class="tablet:col-start-2 tablet:col-end-4">
            <!--==================== Alerta cita pendiente ====================-->

            <?php if (isset($_COOKIE["codigoCita"])): ?>
                <?php

                date_default_timezone_set('America/Matamoros');
                $fecha_actual = date("Y-m-d H:i:s");

                $validarPagoCita = false;

                // Convertir fechas a timestamp
                $timestamp_actual = strtotime($fecha_actual);
                $timestamp_cita = strtotime($_COOKIE["fechaCita"]);

                // Calculamos la diferencia en segundos
                $diferencia = $timestamp_cita - $timestamp_actual;

                // Calculamos la diferencia en horas
                $diferencia_horas = $diferencia / 3600;

                if ($timestamp_cita <= $timestamp_actual || $diferencia_horas < 6) {
                    echo '<div class="grid gap-4">
                                <div class="bg-red-200 text-red-500 rounded-lg py-4 px-5">
                                    <div>
                                        <p class="text-sm font-medium">Lo sentimos, la fecha no es vàlida, debe haber un margen de 6 horas respecto a la fecha actual.</p>
                                        <a href="' . $ruta . '" class="button text-sm text-red-500 font-bold inline-flex items-center gap-x-2 p-0">Vuelve a intentarlo <i class="ri-arrow-right-line transition-transform duration-300 button__icon"></i></a>
                                    </div>
                                </div>
                            </div>';
                    $validarPagoCita = false;
                } else {
                    $validarPagoCita = true;
                }

                // Validar cruce de horas
                $valor = $_COOKIE["idEspecialista"];

                $validarCita = ControladorCitas::ctrMostrarCitas($valor);

                $validar = array();

                if ($validarCita != 0) {

                    foreach ($validarCita as $clave => $valor) {

                        if ($_COOKIE["fechaCita"] == $valor["fechaCita"]) {
                            array_push($validar, false);
                        } else {
                            array_push($validar, true);
                        }

                        if ($validar[$clave] == false) {
                            $validarPagoCita = false;

                            echo '<div class="grid gap-4">
                                        <div class="bg-red-200 text-red-500 rounded-lg py-4 px-5">
                                            <div>
                                                <p class="text-sm font-medium">Lo sentimos, la fecha que seleccionaste ya a sido ocupada.</p>
                                                <a href="' . $ruta . '" class="button text-sm text-red-500 font-bold inline-flex items-center gap-x-2 p-0">Vuelve a intentarlo <i class="ri-arrow-right-line transition-transform duration-300 button__icon"></i></a>
                                            </div>
                                        </div>
                                    </div>';

                            break;
                        } else {
                            $validarPagoCita = true;
                        }
                    }
                }
                ?>

                <?php if ($validarPagoCita): ?>
                    <div class="grid gap-4">
                        <div class="bg-title-color text-white rounded-lg py-4 px-5">
                            <div class="flex items-center justify-between">
                                <div class="grid gap-1">
                                    <p class="text-sm font-medium">Hola John, tienes una cita pendiente de pago</p>
                                    <p class="text-lg font-semibold"><?= $_COOKIE["fechaCita"] ?></p>
                                </div>
                                <button type="button" class="button text-sm tablet:text-base text-white font-medium inline-flex items-center gap-x-2 p-0" id="btnModalPago">
                                    Pagar ahora
                                    <i class="ri-cash-line transition-transform duration-300 button__icon"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                <?php endif ?>

            <?php else: ?>

                <div class="grid gap-4">
                    <div class="bg-title-color text-white rounded-lg py-4 px-5">
                        <div class="flex items-center justify-between">
                            <div class="grid gap-1">
                                <p class="text-sm tablet:text-base  font-medium">Hola John, No tienes nada pendiente</p>
                            </div>
                            <a href="<?= $ruta ?>#especialidades" class="button text-sm tablet:text-base text-white font-medium inline-flex items-center gap-x-2 p-0">
                                Explora nuestras especialidades
                                <i class="ri-tooth-line transition-transform duration-300 button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

            <?php endif ?>

            <!--==================== Historial de citas ====================-->
            <h2 class="text-title-color text-2xl font-bold mt-8">Historial de citas</h2>
            <table
                class="table-auto text-center leading-none h-auto w-full">
                <thead class="text-title-color border-b border-gray-400">
                    <tr class="text-sm tablet:text-base">
                        <th
                            class="px-1 tablet:p-5">
                            #
                        </th>
                        <th
                            class="px-1 tablet:p-5">
                            servicio
                        </th>
                        <th
                            class="px-1 tablet:p-5">
                            Fecha
                        </th>
                        <th
                            class="px-1 tablet:p-5">
                            comentarios
                        </th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="text-sm tablet:text-base font-medium border-b border-gray-300">
                        <td class="px-1 tablet:px-5 tablet:py-3">
                            1
                        </td>
                        <td class="px-1 tablet:px-5 tablet:py-3">
                            Endodoncia
                        </td>
                        <td class="px-1 tablet:px-5 tablet:py-3">
                            2024-08-15 10:00
                        </td>
                        <td class="px-1 tablet:px-5 tablet:py-3">
                            <button class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded transition-colors duration-[400ms] text-white bg-title-color/80 hover:bg-title-color">
                                <i class="ri-edit-box-line"></i>
                            </button>
                            <button class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded transition-colors duration-[400ms] text-white bg-title-color/80 hover:bg-title-color">
                                <i class="ri-eye-line"></i>
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</section>

<!--==================== MODAL PAGO ====================-->
<?php if (isset($_COOKIE["codigoCita"])): ?>
    <?php if ($validarPagoCita): ?>


        <div class="modal__container" id="modalPago">
            <div class="modal__content">
                <div
                    class="inline-flex text-title-color rounded text-3xl absolute top-2 right-2 cursor-pointer transition-colors duration-300 hover:text-first-color"
                    id="closeModalPago">
                    <i class="ri-close-line"></i>
                </div>
                <div class="mb-5">
                    <h3 class="text-xl mb-4 text-center text-title-color">Información de tu cita</h3>
                    <div class="border-b border-text-color-light/25 py-2 mb-3">
                        <div class="flex justify-between mb-2">
                            <p class="text-text-color font-medium">Codigo de la cita</p>
                            <p class="text-title-color font-semibold"><?php echo $_COOKIE["codigoCita"] ?></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class="text-text-color font-medium">Fecha y hora</p>
                            <p class="text-title-color font-semibold"><?php echo $_COOKIE["fechaCita"] ?></p>
                        </div>
                        <div class="flex justify-between mb-2">
                            <p class="text-text-color font-medium">Especialista</p>
                            <p class="text-title-color font-semibold"><?php echo $_COOKIE["nombreEspecialista"] ?></p>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-2">
                            <p class="text-text-color font-medium">Total</p>
                            <p class="text-title-color font-bold">$<?php echo number_format($_COOKIE["pagoCita"], 2); ?> MXN</p>
                        </div>
                    </div>
                </div>
                <div id="paypal-button-container"></div>
            </div>
        </div>

        <script>
            paypal.Buttons({
                createOrder: function(data, actions) {
                    return actions.order.create({
                        purchase_units: [{
                            amount: {
                                value: <?php echo $_COOKIE["pagoCita"]; ?> // Monto del pago
                            }
                        }]
                    });
                },
                onApprove: function(data, actions) {
                    return actions.order.capture().then(function(details) {
                        console.log(details);

                        // Enviar los datos del pago al servidor
                        fetch(urlPrincipal + "controladores/procesar-pago.php", {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json'
                                },
                                body: JSON.stringify({
                                    status: details.status,
                                    idTransaccion: details.id,
                                    idUsuario: 1,
                                    idEspecialista: <?php echo $_COOKIE["idEspecialista"]; ?>,
                                    fechaCita: "<?php echo $_COOKIE["fechaCita"]; ?>",
                                    citaDescripcion: "Cita agendada con el especialista <?php echo $_COOKIE["nombreEspecialista"]; ?> en la fecha <?php echo $_COOKIE["fechaCita"]; ?>",
                                    codigoCita: "<?php echo $_COOKIE["codigoCita"]; ?>",
                                    pagoCita: <?php echo $_COOKIE["pagoCita"]; ?>,
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status === 'success') {
                                    // Ocultar modal de especialistas
                                    ocultarModal(modalPago);

                                    // Eliminamos las cookies generadas
                                    document.cookie = "idEspecialista=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";
                                    document.cookie = "imgEspecialista=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";
                                    document.cookie = "nombreEspecialista=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";
                                    document.cookie = "fechaCita=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";
                                    document.cookie = "codigoCita=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";
                                    document.cookie = "pagoCita=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=' . <?= $ruta ?> . ';";

                                    // Mostramos mensaje de aprobado
                                    swal({
                                        type: "success",
                                        title: "¡CORRECTO!",
                                        text: "¡La cita ha sido agendada con éxito!",
                                        showConfirmButton: true,
                                        confirmButtonText: "Cerrar"

                                    }).then(function(result) {

                                        if (result.value) {
                                            window.location = "<?php echo $ruta; ?>perfil"
                                        }
                                    });

                                } else {
                                    // Ocultar modal de especialistas
                                    ocultarModal(modalPago);

                                    Swal.fire({
                                        type: "error",
                                        title: "¡Error!",
                                        text: "¡Error al registrar el pago!",
                                    });
                                    /* alert('Error al registrar el pago: ' + data.message); */
                                }
                            })
                            .catch(error => {
                                /* console.error('Error:', error); */

                                // Ocultar modal de especialistas
                                ocultarModal(modalPago);

                                Swal.fire({
                                    type: "error",
                                    title: "¡Error!",
                                    text: "¡Error al procesar el pago!",
                                });
                                /* alert('Error al procesar el pago'); */
                            });
                    });
                },
                onError: function(err) {
                    /* console.error('Error:', err); */
                    Swal.fire({
                        type: "error",
                        title: "¡Error!",
                        text: "¡Error al procesar el pago!",
                    });
                    /* alert('Error al procesar el pago'); */
                }
            }).render('#paypal-button-container');
        </script>
    <?php endif ?>
<?php endif ?>