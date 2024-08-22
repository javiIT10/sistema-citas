      <?php

        $valor = $_GET["pagina"];

        $especialistas = ControladorEspecialistas::ctrMostrarEspecialistas($valor);

        ?>
      <!--==================== ESOECIALISTAS ====================-->
      <section
          class="p-[2rem_0_2rem] tablet:p-[5rem_0_5rem] desktop:p-[5rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
          <h2 class="text-2xl desktop:text-3xl mb-8 leading-[140%] text-center">
              Agenda una cita ahora mismo
          </h2>

          <p
              class="text-center tablet:px-16 desktop:px-64 text-sm tablet:text-base flex flex-col items-center gap-3 tablet:justify-between tablet:flex-row">
              <i class="ri-feedback-line text-first-color text-4xl"></i>
              Porfavor seleccione un especialista, a contuación seleccione la fecha y
              horario para consultar la disponibilidad.
          </p>

          <div class="grid gap-6 mt-12 desktop:grid-cols-3">
              <?php foreach ($especialistas as $clave => $valor):  ?>
                  <article
                      class="card-services border border-text-color-light/25 p-3 shadow flex flex-col justify-between duration-[400ms] transition-all service-card">
                      <header
                          class="overflow-hidden h-[245px] bg-cover bg-no-repeat bg-center mb-6"
                          style="background-image: url('<?php echo $servidor . $valor["especialista_img"] ?>');">
                      </header>
                      <div>
                          <h3 class="text-xl mb-1"><?php echo $valor["especialista_nombre"] ?></h3>
                          <p class="text-sm tablet:text-base mb-8">
                              <?php echo $valor["especialista_descripcion"] ?>
                          </p>
                      </div>
                      <a
                          service-id="<?php echo $valor["especialista_id"] ?>"
                          href="#"
                          class="button text-sm tablet:text-base text-first-color hover:text-first-color-alt font-medium inline-flex items-center gap-x-2 p-0">
                          Seleccionar especialista
                          <i class="ri-tooth-line transition-transform duration-300 button__icon"></i>
                      </a>
                  </article>
              <?php endforeach ?>
          </div>
      </section>