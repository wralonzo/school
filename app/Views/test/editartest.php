</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">

    <form method="POST" action="<?= base_url() ?>test/testeditar/<?= $user_data['id_test_paciente'] ?>">
      <div class="relative w-full mb-2 px-5">
        <h2 class="text-xs text-white font-bold text-2xl text-center mb-5">Detalle del conyugue</h2>
      </div>
      <div id="main" class="grid grid-rows-2 grid-flow-col">

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">Observaciones</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="observaciones" value="<?= $user_data['observaciones'] ?>" />
        </div>


        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Paciente</label>
            <select id="sexo" name="paciente" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="">Seleccione un estudiante</option>
              <?php
              if (count($pacientes) > 0) :
                foreach ($pacientes as $estudiante) : ?>
                  <option <?= $estudiante['id_paciente'] == $user_data['paciente'] ? 'selected' : ''; ?> value="<?= $estudiante['id_paciente'] ?>"> <?= $estudiante['nombre'] ?></option>
              <?php endforeach;
              endif; ?>
            </select>
          </div>
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Test</label>
            <select id="sexo" name="test" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="">Seleccione un test</option>
              <?php
              if (count($tests) > 0) :
                foreach ($tests as $estudiante) :
              ?>
                  <option <?= $estudiante['id_test'] == $user_data['test'] ? 'selected' : '' ?> value="<?= $estudiante['id_test'] ?>"> <?= $estudiante['nombre'] ?> </option>
              <?php endforeach;
              endif; ?>
            </select>
          </div>
        </div>
      </div>


      <div class="text-center mt-6">
        <button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
          Registrar
        </button>
      </div>
    </form>
  </div>
</div>