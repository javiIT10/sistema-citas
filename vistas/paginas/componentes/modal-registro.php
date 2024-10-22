  <!--==================== MODAL REGISTER ====================-->
  <div class="modal__container" id="modalRegister">
      <div class="modal__content">
          <div
              class="inline-flex text-title-color rounded text-3xl absolute top-5 right-5 cursor-pointer transition-colors duration-[400ms] hover:text-first-color"
              id="closeRegsiter">
              <i class="ri-close-line"></i>
          </div>

          <form action="" class="form-login" id="formRegister">
              <div class="form__field">
                  <label for="nameRegister" class="form__label">Nombre(s)</label>
                  <input
                      type="text"
                      placeholder="Ingresa tu nombre"
                      required
                      id="nameRegister"
                      name="nameRegister"
                      class="form__input" />

                  <i
                      class="ri-user-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                  <div class="form__error">
                      <i class="ri-information-fill text-base"></i>
                      <span class="text-sm font-medium">El nombre no es válido.</span>
                  </div>
              </div>

              <div class="form__field">
                  <label for="lastNameRegister" class="form__label">Apellido(s)</label>
                  <input
                      type="text"
                      placeholder="Ingresa tus apellidos"
                      required
                      id="lastNameRegister"
                      name="lastNameRegister"
                      class="form__input" />

                  <i
                      class="ri-user-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                  <div class="form__error">
                      <i class="ri-information-fill text-base"></i>
                      <span class="text-sm font-medium">El/los apellidos no son válidos.</span>
                  </div>
              </div>

              <div class="form__field">
                  <label for="emailRegister" class="form__label">Correo electrónico</label>
                  <input
                      type="email"
                      placeholder="Ingresa tu email"
                      required
                      id="emailRegister"
                      name="emailRegister"
                      class="form__input" />

                  <i
                      class="ri-mail-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                  <div class="form__error">
                      <i class="ri-information-fill text-base"></i>
                      <span class="text-sm font-medium">El email no es válido.</span>
                  </div>
              </div>
              <div class="form__field">
                  <label for="passwordRegister" class="form__label">Contraseña</label>
                  <input
                      type="password"
                      placeholder="Ingresa tu contraseña"
                      required
                      id="passwordRegister"
                      name="passwordRegister"
                      class="form__input" />

                  <i
                      class="ri-lock-line h-max text-2xl absolute left-6 top-0 bottom-0 m-auto"></i>

                  <div class="form__error">
                      <i class="ri-information-fill text-base"></i>
                      <span class="text-sm font-medium">La contraseña no es válida.</span>
                  </div>
              </div>

              <div>
                  <button
                      class="button bg-first-color hover:bg-first-color-alt items-center gap-x-2 w-full mt-4 justify-center shadow-input-valid text-sm">
                      Iniciar sesión
                      <i
                          class="ri-login-box-line transition-transform duration-[400ms] button__icon"></i>
                  </button>

                  <div class="mt-3 text-center">
                      <p class="text-sm font-medium text-text-color">
                          ¿Ya tienes una cuenta? |
                          <a
                              href="#"
                              class="transition-all duration-[400ms] text-first-color hover:text-first-color-alt btn-login">Inicia sesión</a>
                      </p>
                  </div>
              </div>

              <div>
                  <p class="py-2 relative text-center">
                      <span
                          class="w-full h-[1px] absolute left-0 top-[20px] bottom-0 bg-gray-300"></span>
                      <span
                          class="font-medium text-base text-text-color bg-white relative z-10 px-1">O</span>
                  </p>

                  <div>
                      <a
                          href="#"
                          class="button bg-white border border-gray-300 text-text-color items-center gap-x-3 w-full mt-4 justify-center hover:shadow-input-valid text-sm">
                          Iniciar sesión con Google
                          <img
                              src="assets/img/logos/google.png"
                              alt="google-logo"
                              class="w-[20px] h-[20px] transition-transform duration-[400ms] button__icon" />
                      </a>
                      <a
                          href="#"
                          class="button bg-white border border-gray-300 text-text-color items-center gap-x-3 w-full mt-4 justify-center hover:shadow-input-valid text-sm">
                          Iniciar sesión con Facebook
                          <img
                              src="assets/img/logos/facebook.png"
                              alt="facebook-logo"
                              class="w-[20px] h-[20px] transition-transform duration-[400ms] button__icon" />
                      </a>
                  </div>
              </div>
          </form>
      </div>
  </div>