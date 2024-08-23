      <?php
        if (isset($_POST["idEspecialista"])) {

            $valor = $_POST["idEspecialista"];

            $citas =  ControladorCitas::ctrMostrarCitas($valor);
            $precioCita = 200;
        } else {
            echo '<script> window.location = "' . $ruta . '" </script>';
        }
        ?>
      <!--==================== CALENDAR ====================-->
      <section
          id="infoCitas"
          class="p-[2rem_0_2rem] tablet:p-[5rem_0_5rem] desktop:p-[5rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto citas-info" idEspecialista="<?php echo $_POST["idEspecialista"] ?>" fechaCita="<?php echo $_POST["fechaSeleccionada"] ?>">
          <div
              class="grid gap-6 tablet:grid-cols-2 desktop:grid-cols-3 desktop:gap-10">
              <header
                  class="flex flex-col gap-4 tablet:flex-row-reverse tablet:items-start desktop:items-center tablet:justify-between tablet:col-start-1 tablet:col-end-2 desktop:col-end-3 ">
                  <a
                      href="services.html"
                      class="button text-sm tablet:text-base text-first-color hover:text-first-color-alt font-medium inline-flex items-center gap-x-2 p-0">
                      Mis citas
                      <i
                          class="ri-calendar-event-line transition-transform duration-[400ms] button__icon"></i>
                  </a>
                  <div
                      class="desktop:flex desktop:flex-row-reverse desktop:items-center desktop:justify-between desktop:gap-44">
                      <h2
                          id="infoDisponibilidad"
                          class="text-2xl leading-[140%] desktop:text-3xl mb-3 desktop:mb-0">
                          ¡Está disponible!
                      </h2>
                      <ul class="pl-2 flex flex-col gap-2">
                          <li class="flex items-center gap-1">
                              <span
                                  class="inline-block w-5 h-5 rounded bg-white border border-gray-600/65"></span>Disponible
                          </li>
                          <li class="flex items-center gap-1">
                              <span
                                  class="inline-block w-5 h-5 rounded bg-title-color border border-gray-600/65"></span>No disponible
                          </li>
                          <li class="flex items-center gap-1">
                              <span
                                  class="inline-block w-5 h-5 rounded bg-first-color border border-gray-600/65"></span>Tu selección
                          </li>
                      </ul>
                  </div>
              </header>

              <div
                  id="calendar"
                  class="tablet:col-start-1 tablet:col-end-2 desktop:col-end-3 w-full"></div>

              <form
                  id="datosCita"
                  class="flex flex-col gap-6 tablet:col-start-2 tablet:col-end-3 tablet:row-start-1 tablet:row-end-3 desktop:col-start-3 desktop:col-end-4">
                  <header class="my-5 border-b border-gray-300 pb-3">
                      <h3 class="text-xl mb-2">Información de tu cita</h3>
                      <p
                          class="flex gap-2 mobile:gap-4 items-center text-sm mobile:text-base">
                          <i class="ri-feedback-line text-first-color text-2xl"></i>
                          Por favor verifique que su Información es correcta.
                      </p>
                  </header>
                  <div class="form__field">
                      <label for="citasCodigoCita" class="form__label">Código de la cita:</label>
                      <input
                          type="text"
                          required
                          disabled
                          id="citasCodigoCita"
                          name="codigoCita"
                          class="form__input text-first-color"
                          value="" />

                      <i class="ri-barcode-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>
                  </div>

                  <div class="form__field">
                      <label for="citasDr" class="form__label">Especialista:</label>
                      <input
                          type="text"
                          required
                          disabled
                          id="citasDr"
                          name="especialista"
                          class="form__input text-first-color"
                          value="<?php echo $_POST["nombreEspecialista"] ?>" />

                      <i class="ri-tooth-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>
                  </div>

                  <div class="form__field">
                      <label for="citasFechaSeleccionada" class="form__label">Fecha de tu cita:</label>
                      <input
                          type="text"
                          required
                          disabled
                          id="citasFechaSeleccionada"
                          name="fechaSeleccionada"
                          class="form__input text-first-color"
                          value="<?php echo $_POST["fechaSeleccionada"] ?>" />

                      <i class="ri-calendar-schedule-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>
                  </div>

                  <div class="flex flex-row-reverse justify-between items-end gap-4">
                      <div class="text-end">
                          <label for="citasPrecioCita"
                              class="text-lg font-semibold text-title-color">Total a pagar</label>
                          <input
                              id="citasPrecioCita"
                              name="precioCita"
                              type="text"
                              value="$ <?php echo number_format($precioCita, 2); ?> mx"
                              disabled
                              class="text-lg tablet:text-xl border-none font-semibold text-first-color-alt p-0 w-32 text-end" />
                      </div>
                      <button
                          type="button"
                          class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full justify-center text-sm mobile:text-lg px-3">
                          Pagar cita
                          <i
                              class="ri-bank-card-line transition-transform duration-[400ms] button__icon"></i>
                      </button>
                  </div>
              </form>

              <form
                  id="formNoDisponible"
                  action="<?php echo $ruta; ?>citas" method="post"
                  class="flex-col gap-6 tablet:col-start-2 tablet:col-end-3 tablet:row-start-1 tablet:row-end-3 desktop:col-start-3 desktop:col-end-4 hidden ">
                  <header class="my-5 border-b border-gray-300 pb-3">
                      <h2 class="text-2xl mb-2">¡Lo sentimos!</h2>
                      <p
                          class="flex gap-2 mobile:gap-4 items-center text-sm mobile:text-base">
                          <i class="ri-feedback-line text-first-color text-2xl"></i>
                          Por favor modifique su fecha y/o horario conforme a la disponibilidad de la agenda.
                      </p>
                  </header>
                  <div class="form__field">
                      <label for="noDisponibleFechaSeleccionada" class="form__label">Fecha de la cita</label>
                      <input
                          type="text"
                          placeholder="Selecciona una fecha"
                          required
                          id="noDisponibleFechaSeleccionada"
                          name="fechaSeleccionada"
                          class="form__input" />

                      <i class="ri-calendar-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                      <div class="form__error">
                          <i class="ri-information-fill text-base"></i>
                          <span class="text-sm font-medium">La fecha seleccionada no es válida.</span>
                      </div>
                  </div>

                  <div class="form__field">
                      <label for="noDisponibleDr" class="form__label">Especialista:</label>
                      <input
                          type="text"
                          required
                          disabled
                          id="noDisponibleDr"
                          name="especialista"
                          class="form__input"
                          value="<?php echo $_POST["nombreEspecialista"] ?>" />

                      <i class="ri-tooth-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>
                  </div>

                  <input type="hidden" name="idEspecialista" value="<?php echo $_POST["idEspecialista"] ?>" />
                  <input type="hidden" name="imgEspecialista" value="<?php echo $_POST["imgEspecialista"] ?>" />
                  <input type="hidden" name="nombreEspecialista" value="<?php echo $_POST["nombreEspecialista"] ?>" />

                  <button
                      type="submit"
                      class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full mt-4 justify-center">
                      Validar disponibilidad
                      <i
                          class="ri-calendar-line transition-transform duration-300 button__icon"></i>
                  </button>
              </form>
          </div>
      </section>