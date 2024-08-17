    <!--==================== MODAL SERVICES ====================-->
    <div class="modal__container" id="modalServices">
        <div class="modal__content">
            <div
                class="inline-flex text-title-color rounded text-3xl absolute top-5 right-5 cursor-pointer transition-colors duration-300 hover:text-first-color"
                id="closeServices">
                <i class="ri-close-line"></i>
            </div>
            <form action="citas.html" method="post" class="flex flex-col gap-5">
                <div>
                    <label for="fecha">Selecciona una fecha</label>
                    <input
                        type="date"
                        placeholder="Selecciona una fecha"
                        name="fecha"
                        id="fecha"
                        class="block w-full outline-none rounded-md border-gray-300 focus:border-none focus:ring-first-color"
                        required />
                </div>

                <div>
                    <label for="horario">Selecciona un horario</label>
                    <select
                        name="horario"
                        id="horario"
                        class="block w-full outline-none rounded-md border-gray-300 focus:border-none focus:ring-first-color"
                        required>
                        <option value="">seleccione</option>
                        <option value="1">10:00 am</option>
                        <option value="2">12:00 pm</option>
                        <option value="3">14:00 pm</option>
                        <option value="4">16:00 pm</option>
                        <option value="5">18:00 pm</option>
                        <option value="6">20:00 pm</option>
                    </select>
                </div>

                <input type="hidden" name="servicio" />

                <button
                    class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full mt-4 justify-center">
                    Validar disponibilidad
                    <i
                        class="ri-calendar-line transition-transform duration-300 button__icon"></i>
                </button>
            </form>
        </div>
    </div>