      <?php
        $valores = ControladorValores::ctrMostrarValores();
        ?>
      <!--==================== VALUES ====================-->
      <section
          id="values"
          class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] desktop:p-[13rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
          <div
              class="bg-first-color p-[3rem_2rem_2rem] rounded lg:p-[3.5rem_2.5rem]">
              <h2
                  class="text-xl mb-8 leading-[140%] text-center lg:text-2xl text-white">
                  Nuestros <br />
                  Valores
              </h2>

              <div class="grid gap-8 pt-4 md:grid-cols-2 lg:grid-cols-3">
                  <?php foreach ($valores as $clave => $valor):  ?>
                      <div
                          class="bg-container-color p-[2.5rem_2rem_2rem_1.5rem] rounded text-sm md:text-base value-card">
                          <div
                              class="inline-block bg-first-color text-white p-[.5rem_.75rem] rounded text-xl mb-6 transition-all duration-[400ms]">
                              <?php echo $valor["numero"] ?>
                          </div>
                          <h3 class="text-lg mb-2"><?php echo $valor["titulo"] ?></h3>
                          <p>
                              <?php echo $valor["descripcion"] ?>
                          </p>
                      </div>
                  <?php endforeach ?>
              </div>
          </div>
      </section>