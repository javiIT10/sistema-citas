      <!--==================== CALENDAR ====================-->
      <section
          class="p-[2rem_0_2rem] tablet:p-[5rem_0_5rem] desktop:p-[5rem_0_5rem] max-w-7xl mx-4 sm-mobil:mx-6 desktop:px-6 desktop:mx-auto">
          <div
              class="grid gap-6 tablet:grid-cols-2 desktop:grid-cols-3 desktop:gap-10">
              <header
                  class="flex flex-col gap-4 tablet:flex-row-reverse tablet:items-start desktop:items-center tablet:justify-between tablet:col-start-1 tablet:col-end-2 desktop:col-end-3 citas-calendar">
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
                  class="tablet:col-start-1 tablet:col-end-2 desktop:col-end-3 w-full citas-calendar"></div>

              <form
                  action="perfil.html"
                  class="flex flex-col gap-6 tablet:col-start-2 tablet:col-end-3 tablet:row-start-1 tablet:row-end-3 desktop:col-start-3 desktop:col-end-4 citas-info">
                  <div>
                      <label class="text-xl font-semibold text-title-color">Código de la cita</label>
                      <input
                          type="text"
                          value="K2DRESF34"
                          disabled
                          class="text-sm tablet:text-base border-none font-semibold text-first-color-alt p-0 w-full" />
                  </div>
                  <div>
                      <label>Tipo de servicio</label>
                      <input
                          type="text"
                          value="Limpiezas Dentales"
                          disabled
                          class="text-sm tablet:text-base rounded-md border-gray-300 bg-gray-400/25 w-full" />
                  </div>
                  <div>
                      <label>Fecha de la cita</label>
                      <input
                          type="text"
                          value="2024-08-22"
                          disabled
                          class="text-sm tablet:text-base rounded-md border-gray-300 bg-gray-400/25 w-full" />
                  </div>
                  <div>
                      <label>Fecha de la cita</label>
                      <input
                          type="text"
                          value="2024-08-22"
                          disabled
                          class="text-sm tablet:text-base rounded-md border-gray-300 bg-gray-400/25 w-full" />
                  </div>

                  <div class="flex flex-row-reverse justify-between items-end gap-4">
                      <div class="text-end">
                          <label
                              class="text-lg tablet:text-xl font-semibold text-title-color">Total a pagar</label>
                          <input
                              type="text"
                              value="$ 400.00 mx"
                              disabled
                              class="text-lg tablet:text-xl border-none font-semibold text-first-color-alt p-0 w-32 text-end" />
                      </div>
                      <button
                          type="submit"
                          class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full justify-center text-sm mobile:text-lg px-3">
                          Pagar cita
                          <i
                              class="ri-bank-card-line transition-transform duration-[400ms] button__icon"></i>
                      </button>
                  </div>
              </form>
          </div>
      </section>