    <!--==================== MODAL SERVICES ====================-->
    <div class="modal__container" id="modalServices">
        <div class="modal__content">
            <div
                class="inline-flex text-title-color rounded text-3xl absolute top-2 right-2 cursor-pointer transition-colors duration-300 hover:text-first-color"
                id="closeServices">
                <i class="ri-close-line"></i>
            </div>
            <form action="citas.html" method="post" class="flex flex-col gap-5 pt-3">

                <div class="form__field">
                    <label for="fechaCita" class="form__label">Fecha de la cita</label>
                    <input
                        type="text"
                        placeholder="Selecciona una fecha"
                        required
                        id="fechaCita"
                        name="fechaCita"
                        class="form__input" />

                    <i class="ri-calendar-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                    <div class="form__error">
                        <i class="ri-information-fill text-base"></i>
                        <span class="text-sm font-medium">La fecha seleccionada no es válida.</span>
                    </div>
                </div>

                <input type="hidden" name="id-servicio" />

                <button
                    type="submit"
                    class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full mt-4 justify-center">
                    Validar disponibilidad
                    <i
                        class="ri-calendar-line transition-transform duration-300 button__icon"></i>
                </button>
            </form>
        </div>
    </div>