    <?php
    $categorias = ControladorCategorias::ctrMostrarCategorias();
    ?>
    <!--==================== SERVICES ====================-->
    <section
        class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] desktop:p-[13rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto"
        id="services">
        <h2 class="text-2xl desktop:text-3xl mb-8 leading-[140%] text-center">
            Descubre nuestros servicios
        </h2>

        <p
            class="text-center tablet:px-16 desktop:px-64 text-sm tablet:text-base">
            Ofrecemos soluciones dentales personalizadas y asequibles
        </p>

        <div class="grid gap-6 mt-12 desktop:grid-cols-3">
            <?php foreach ($categorias as $clave => $valor):  ?>
                <article
                    class="border border-text-color-light/25 p-3 shadow flex flex-col justify-between category-card">
                    <header
                        class="overflow-hidden h-[245px] bg-cover bg-no-repeat bg-center mb-6"
                        style="
                    background-image: url('<?php echo $servidor . $valor["img"] ?>');
                  "></header>
                    <div>
                        <h3 class="text-xl mb-1"><?php echo $valor["titulo"] ?></h3>
                        <p class="text-sm tablet:text-base mb-8">
                            <?php echo $valor["descripcion"] ?>
                        </p>
                    </div>
                    <a
                        href="<?php echo $ruta . $valor["ruta"] ?>"
                        class="button text-sm tablet:text-base text-first-color hover:text-first-color-alt font-medium inline-flex items-center gap-x-2 p-0">
                        Consultar servicios
                        <i
                            class="ri-arrow-right-line transition-transform duration-[400ms] button__icon"></i>
                    </a>
                </article>
            <?php endforeach ?>
        </div>
    </section>