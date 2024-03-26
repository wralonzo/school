</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
    <div class="text-blueGray-400 text-center mb-3 font-bold">
      <small>Login</small>
    </div>
    <form method="POST" action="<?= base_url() ?>user/editar/<?= $user_data['id'] ?>">
      <div id="main" class="grid grid-rows-3 grid-flow-col">
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">Correo</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Correo" name="correo" value="<?= $user_data['correo'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Nombres</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Nombres" name="nombres" value="<?= $user_data['nombres'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Apellidos</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellidos" name="apellidos" value="<?= $user_data['apellidos'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">Contacto</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Contacto" name="contacto" value="<?= $user_data['contacto'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Contraseña</label>
          <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password" name="clave" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Seleccione ROL</label>
            <select id="peces" name="role" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="Cubo">Seleccionar</option>
              <?php
              $selectedadmin = 'selected';
              $selectedstudent = '';
              $selectedpacient = '';
              if ($user_data['role'] == 'admin') {
                $selectedadmin = 'selected';
              }
              if ($user_data['role'] == 'estudiante') {
                $selectedstudent = 'selected';
              }
              if ($user_data['role'] == 'paciente') {
                $selectedpacient = 'selected';
              }
              ?>
              <option <?= $selectedadmin ?> value="admin">Administrador</option>
              <option <?= $selectedstudent ?> value="estudiante">Estudiante</option>


            </select>
          </div>
        </div>
      </div>
      <div class="text-center mt-6">
      <div id="main" class="grid grid-rows-1 grid-flow-col">
          <div class="relative w-full mb-3 px-5">
            <a href="<?= base_url() ?>user/list">
              <button type="button" class="bg-blue-600 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">
                Cancelar
              </button>
            </a>
          </div>
          <div class="relative w-full mb-3 px-5">
            <button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
              Registrar Datos
            </button>
          </div>
      </div>
    </form>
  </div>
</div>