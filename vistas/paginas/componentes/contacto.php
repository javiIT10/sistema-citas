    <!--==================== CONTACT ====================-->
    <section
        class="p-[3.5rem_0_2rem] tablet:p-[10rem_0_5rem] desktop:p-[13rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto"
        id="contact">
        <div class="grid gap-y-14 tablet:grid-cols-2">
            <div class="contact-info">
                <h2 class="text-2xl mb-8 desktop:text-3xl">
                    Comuníquese con nosotros <br />
                    hoy a través de cualquiera <br />
                    de los medios
                </h2>

                <div class="grid gap-y-8">
                    <div>
                        <h3 class="text-base font-medium text-text-color mb-2">
                            Llámenos
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-2 text-title-color font-medium">
                            <i class="ri-phone-line text-xl"></i>
                            +999 888 777
                        </span>
                    </div>

                    <div class="contact__information">
                        <h3 class="text-base font-medium text-text-color mb-2">
                            Escríbenos por correo
                        </h3>
                        <span
                            class="inline-flex items-center gap-x-2 text-title-color font-medium">
                            <i class="ri-mail-line text-xl"></i>
                            user@email.com
                        </span>
                    </div>
                </div>
            </div>

            <form action="" class="contact-form">
                <div class="grid gap-y-8 mb-10">
                    <div class="relative h-12 border-b border-text-color-light">
                        <input
                            name="emailContact"
                            id="emailContact"
                            type="email"
                            placeholder=""
                            class="contact__input focus:ring-0" />
                        <label for="emailContact" class="contact__label">Email</label>
                    </div>

                    <div class="relative h-12 border-b border-text-color-light">
                        <input
                            name="reasonContact"
                            id="reasonContact"
                            type="text"
                            placeholder=" "
                            class="contact__input focus:ring-0" />
                        <label for="reasonContact" class="contact__label">Motivo</label>
                    </div>

                    <div class="relative border-b border-text-color-light h-28">
                        <textarea
                            name="messageContact"
                            id="messageContact"
                            name="message"
                            placeholder=" "
                            class="contact__input resize-none focus:ring-0"></textarea>
                        <label for="messageContact" class="contact__label">Mensaje</label>
                    </div>
                </div>

                <button
                    class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2">
                    Enviar mensaje
                    <i
                        class="ri-mail-send-line transition-transform duration-[400ms] button__icon"></i>
                </button>
            </form>
        </div>
    </section>