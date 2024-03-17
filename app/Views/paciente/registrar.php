</div> </div><div class="px-4 md:px-12 mx-auto w-full -m-24">
<div class="flex-auto px-4 lg:px-10 py-20 pt-0">
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                  <small>Login</small>
                </div>
                <form method="POST" action="<?= base_url() ?>paciente/registrar">
                <div id="main" class="grid grid-rows-3 grid-flow-col">
                <div class="relative w-full mb-3 px-5">
                  <label class="block uppercase text-xs text-white font-bold mb-2"
                    for="grid-password">Nombre</label>
                    <input type="text"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="nombre" name="nombre"/>
                </div>

                <div class="relative w-full mb-3 px-5">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="grid-password">lugar</label>
                    <input type="text"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="lugar" name="lugar"/>
                </div>

                <div class="relative w-full mb-3 px-5">
                  <label class="block uppercase  text-blueGray-600 text-xs font-bold mb-2"
                    for="grid-password">Fecha naciemiento</label><input type="date"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="fecha_nacimiento" name="fecha_nacimiento" />
                </div>

                <div class="relative w-full mb-3 px-5">
                  <label class="block uppercase text-white text-xs font-bold mb-2"
                    for="grid-password">edad</label>
                    <input type="text"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="edad" name="edad"/>
                </div>
                <div class="relative w-full mb-3 px-5">
                  <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Tipo Sexo</label>
                      <select id="sexo" name="sexo" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                          <option value="Hombre">Hombre</option>
                          <option value="Mujer">Mujer</option>
                      </select>
                  </div>
                </div>
                <div class="relative w-full mb-3 px-5">
                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                    for="grid-password">lugar familia</label>
                    <input type="text"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="lugar_familia" name="lugar familia"/>
                </div>

                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-white text-xs font-bold mb-2"
                      for="grid-password">ocupacion</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="ocupacion" name="ocupacion"/>
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">observaciones</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="observaciones" name="observaciones"/>
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">escolaridad</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="escolaridad" name="escolaridad"/>
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-white text-xs font-bold mb-2"
                      for="grid-password">estado civil</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="estado_civil" name="estado_civil"/>
                  </div>
                  <div class="relative w-full mb-3 px-5">
                  <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Estudiante</label>
                      <select id="sexo" name="estudiante" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                          <option value="">Seleccione un estudiante</option>
                          <?php 
                          if( count($estudiantes) > 0 ):
                            foreach($estudiantes as $estudiante): ?>
                            <option value="">Seleccionen un estudiante</option>
                          <option value="<?= $estudiante['id_estudiante']?>"> <?= $estudiante['nombre'] ?> <?= $estudiante['apellido'] ?></option>
                        <?php  endforeach; endif; ?>
                      </select>
                  </div>
                </div>
                </div>

                  <div class="text-center mt-6">
                    <button
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                      type="submit">
                      Registrar
                    </button>
                  </div>
                </form>
                </div>
              </div>