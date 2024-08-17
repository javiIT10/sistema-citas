<header
    class="w-full bg-body-color fixed top-0 left-0 z-[100] transition-all duration-[400ms]"
    id="header">
    <nav
        class="h-14 flex justify-between items-center tablet:h-20 tablet:gap-x-12 max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
        <a
            href="/"
            class="text-title-color uppercase font-bold tracking-[-1px] inline-flex items-center gap-x-2 hover:text-first-color transition-all duration-[400ms]">
            <i class="ri-tooth-line text-lg text-first-color"></i>DentalClinic
        </a>

        <div class="nav-menu -right-full" id="nav-menu">
            <ul class="flex flex-col gap-y-6 tablet:flex-row tablet:gap-x-12">
                <li>
                    <a href="#home" class="nav-link">Inicio</a>
                </li>
                <li>
                    <a href="#about" class="nav-link">Nosotros</a>
                </li>
                <li>
                    <a href="#values" class="nav-link">Valores</a>
                </li>
                <li>
                    <a href="#services" class="nav-link">Servicios</a>
                </li>
                <li>
                    <a href="#contact" class="nav-link">Contacto</a>
                </li>
            </ul>

            <div
                class="text-title-color text-2xl absolute top-4 right-5 cursor-pointer hover:text-first-color tablet:hidden transition-all duration-[400ms]"
                id="nav-close">
                <i class="ri-close-line"></i>
            </div>
        </div>

        <div class="inline-flex items-center gap-x-4">
            <i
                class="ri-login-box-line text-title-color text-xl cursor-pointer hover:text-first-color transition-all duration-[400ms] btn-login"></i>
            <!--           <i
            class="ri-user-line text-title-color text-xl cursor-pointer hover:text-first-color transition-all duration-[400ms] hidden"
          ></i> -->

            <div
                class="text-title-color text-xl cursor-pointer hover:text-first-color transition-all duration-[400ms] tablet:hidden"
                id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </div>
    </nav>
</header>