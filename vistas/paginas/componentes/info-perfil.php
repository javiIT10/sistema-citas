      <!--==================== INFO PERFIL ====================-->
      <section
          class="p-[2rem_0_2rem] tablet:p-[5rem_0_5rem] desktop:p-[5rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
          <div
              class="flex flex-col gap-7 desktop:flex-row desktop:items-center desktop:justify-between desktop:px-32">
              <!--==================== Navegation ====================-->
              <aside class="grid gap-7 perfil-info">
                  <header class="flex flex-col justify-between items-center gap-3">
                      <img
                          src="assets/img/usuario.png"
                          alt="usuario-imagen"
                          class="w-[120px] h-[120px] rounded-full" />
                      <h3 class="text-base font-semibold text-text-color">
                          Javier Alexis Peralta Duarte
                      </h3>
                  </header>
                  <ul>
                      <li>
                          <a
                              href=""
                              class="text-base font-medium text-text-color-light transition-colors duration-[400ms] hover:text-first-color-alt w-full block p-2"><i class="ri-calendar-event-line"></i> Mis citas</a>
                          <ul>
                              <li
                                  class="text-base text-text-color-light w-full block py-2 pl-4 transition-colors duration-[400ms] hover:text-first-color">
                                  <a href="">0 citas vencida</a>
                              </li>
                              <li
                                  class="text-base text-text-color-light w-full block py-2 pl-4 transition-colors duration-[400ms] hover:text-first-color">
                                  <a href=""> 2 citas activas</a>
                              </li>
                          </ul>
                      </li>
                      <li>
                          <a
                              href=""
                              class="text-base font-medium text-text-color-light transition-colors duration-[400ms] hover:text-first-color-alt w-full block p-2"><i class="ri-user-line"></i> Mi cuenta</a>
                      </li>
                      <li>
                          <a
                              href=""
                              class="text-base font-medium text-text-color-light transition-colors duration-[400ms] hover:text-red-500 w-full block p-2"><i class="ri-logout-box-line"></i> Cerrar sesión</a>
                      </li>
                  </ul>
              </aside>

              <div class="citas-info">
                  <header class="mb-3">
                      <h3 class="text-lg font-semibold text-text-color text-start">
                          Hola, Javier
                      </h3>
                  </header>

                  <!--==================== METODOS PAGO ====================-->

                  <?php if (isset($_COOKIE["codigoCita"])): ?>

                      <?php

                        $validarCita = false;
                        $hoy = date("Y-m-d H:i:00");

                        if ($hoy >= $_COOKIE["fechaCita"]) {
                            echo '<p class="text-text-color font-medium text-sm tablet:text-base py-4 px-2 bg-red-200 rounded-sm border border-red-300 mb-2">Lo sentimos, la fecha de la cita no puede ser inferior al día de hoy, vuelve a intentarlo.</p>';
                            $validarCita = false;
                        } else {
                            $validarCita = true;
                        }
                        ?>

                      <?php if ($validarCita): ?>

                          <div class="border border-text-color-light/25 p-3 mb-3">
                              <h3 class="text-lg font-semibold text-text-color">¡Parece que tienes algo pendiente!</h3>
                              <p class="text-sm tablet:text-base pb-2">Tienes una cita pendiente de pago, porfavor termina de agendar tu cita. </p>
                              <a
                                  href=""
                                  class="button text-sm text-first-color hover:text-first-color-alt font-medium inline-flex items-center gap-x-2 p-0" id="btnModalPago">
                                  Ver tu cita pendiente
                                  <i class="ri-arrow-right-line transition-transform duration-[400ms] button__icon"></i>
                              </a>
                          </div>

                      <?php endif ?>

                  <?php endif ?>

                  <!--==================== TABLA CITAS ====================-->

                  <table
                      class="table-auto border-separate text-center leading-none h-auto w-full">
                      <thead>
                          <tr class="text-sm tablet:text-base">
                              <th
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  #
                              </th>
                              <th
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  servicio
                              </th>
                              <th
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  Fecha
                              </th>
                              <th
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  comentarios
                              </th>
                          </tr>
                      </thead>
                      <tbody>
                          <tr class="text-sm tablet:text-base">
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  1
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  Endodoncia
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  2024-08-15 10:00
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  <button
                                      class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded border bg-first-color transition-colors duration-[400ms] hover:bg-first-color-alt text-white">
                                      <i class="ri-edit-box-fill"></i>
                                  </button>
                                  <button
                                      class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded border bg-yellow-500 transition-colors duration-[400ms] hover:bg-yellow-600 text-white">
                                      <i class="ri-eye-fill"></i>
                                  </button>
                              </td>
                          </tr>

                          <tr class="text-sm tablet:text-base">
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  2
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  Limpieza dental
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  2024-08-22 08:00
                              </td>
                              <td
                                  class="border border-slate-300 px-1 tablet:px-5 tablet:py-2">
                                  <button
                                      class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded border bg-first-color transition-colors duration-[400ms] hover:bg-first-color-alt text-white">
                                      <i class="ri-edit-box-fill"></i>
                                  </button>
                                  <button
                                      class="inline-flex justify-center items-center w-7 h-5 tablet:w-10 tablet:h-7 rounded border bg-yellow-500 transition-colors duration-[400ms] hover:bg-yellow-600 text-white">
                                      <i class="ri-eye-fill"></i>
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
          <?php if ($validarCita): ?>


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