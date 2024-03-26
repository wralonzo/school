</div> </div><div class="px-4 md:px-12 mx-auto w-full -m-24">
<div class="flex-auto px-4 lg:px-10 py-20 pt-0">
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                  <small>Estudiante</small>
                </div>
                <form method="POST" action="<?= base_url() ?>estudiante/editar/<?= $user_data['id_estudiante'] ?>">
                <div id="main" class="grid grid-rows-4 grid-flow-col">
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-white text-xs font-bold mb-2"
                      for="grid-password">carnet</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="carnet" name="carnet" value="<?= $user_data['carnet'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">nombre</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="nombre" name="nombre" value="<?= $user_data['nombre'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">Apellidos</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="apellido" name="apellido" value="<?= $user_data['apellido'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">semestre</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="semestre" name="semestre" value="<?= $user_data['semestre'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-white text-xs font-bold mb-2"
                      for="grid-password">lugar</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="lugar" name="lugar" value="<?= $user_data['lugar'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"
                      for="grid-password">edad</label>
                      <input type="text"
                      class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                      placeholder="edad" name="edad" value="<?= $user_data['edad'] ?>" />
                  </div>
                  <div class="relative w-full mb-3 px-5">
                    <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
                        <label for="country" class="block text-sm font-medium text-gray-700">Tipo de usuarios</label>
                        <select id="peces" name="genero" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            <option value="Cubo">Seleccionar</option>
                            <?php 
                              $selectedadmin = '';
                              $selectedstudent = '';
                            if($user_data['genero'] == 'Hombre'){
                                $selectedadmin = 'selected';
                            }if($user_data['genero'] == 'Mujer'){
                                $selectedstudent = 'selected';
                            }
                            ?>
                            <option <?= $selectedadmin ?> value="Hombre">Hombre</option>
                            <option <?= $selectedstudent ?> value="Mujer">Mujer</option>
                            

                        </select>
                    </div>
                  </div>

                  <div class="relative w-full mb-3 px-5">
                    <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
                      <label for="country" class="block text-sm font-medium text-gray-700">Estado</label>
                      <select id="estado" name="estado" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                      </select>
                    </div>
                  </div>
                  </div>
                  <div class="text-center mt-6">
                    <button
                      class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150"
                      type="submit">
                      Guardar Cambios
                    </button>
                  </div>
                </form>
                </div>
              </div>