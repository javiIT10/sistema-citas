    <?php
    $nosotros = ControladorNosotros::ctrMostrarNosotros();
    ?>

    <!--==================== ABOUT ====================-->
    <section
        class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] desktop:p-[13rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto"
        id="about">
        <div class="grid gap-y-8 tablet:grid-cols-2 xl:gap-x-28">
            <img
                src="<?php echo $servidor . $nosotros["img"] ?>"
                alt=""
                class="w-[280px] justify-self-center desktop:w-[350px] rounded-lg shadow-3xl about-img" />

            <div class="about-data">
                <h2 class="text-2xl leading-[140%] mb-4 desktop:text-3xl">
                    <?php echo $nosotros["titulo"] ?>
                </h2>

                <p class="mb-8 text-sm tablet:text-base">
                    <?php echo $nosotros["descripcion"] ?>
                </p>
            </div>
        </div>
    </section>