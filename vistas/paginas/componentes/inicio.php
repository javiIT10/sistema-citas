      <?php
        $inicio = ControladorInicio::ctrMostrarInicio();
        ?>

      <!--==================== HOME ====================-->
      <section
          class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] desktop:p-[13rem_0_5rem]"
          id="home">
          <div
              class="relative gap-x-8 grid tablet:grid-cols-2 tablet:items-center max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
              <img
                  src="<?php echo $servidor . $inicio["img"] ?>"
                  alt=""
                  class="w-[200px] justify-self-center tablet:w-[300px] tablet:order-1 desktop:w-[400px] home-img" />

              <div class="home-data">
                  <h1 class="text-3xl desktop:text-4xl mb-4">
                      <?php echo $inicio["titulo"] ?>
                  </h1>
                  <p class="mb-10 desktop:mr-28 text-sm tablet:text-base">
                      <?php echo $inicio["descripcion"] ?>
                  </p>
                  <a
                      href="#especialidades"
                      class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 nav-link hover:text-white">
                      Explorar servicios
                      <i
                          class="ri-arrow-right-down-line transition-transform duration-[400ms] button__icon"></i>
                  </a>
              </div>
          </div>
      </section>