</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
    <div class="text-blueGray-400 text-center mb-3 font-bold">
      <small>Cita</small>
    </div>
    <form method="POST" action="<?= base_url() ?>cita/editar/<?= $data['id_cita'] ?>">
      <div id="main" class="grid grid-rows-2 grid-flow-col">
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">fecha</label>
          <input type="date" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="fecha" name="fecha" value="<?= $data['fecha'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">hora</label>
          <input type="time" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="hora" name="hora" value="<?= $data['hora'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Jornada</label>
            <select id="jornada" name="jornada" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option <?= $data['jornada'] == 'Matutina' ? 'selected' : '' ?> value="Matutina">Matutina</option>
              <option <?= $data['jornada'] == 'Vespertina' ? 'selected' : '' ?> value="Vespertina">Vespertina</option>
            </select>
          </div>
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Estado de la cita </label>
            <select id="estado_cita" name="estado_cita" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option <?= $data['estado_cita'] == 'Cumplida' ? 'selected' : '' ?> value="Cumplida">Aceptada</option>
              <option <?= $data['estado_cita'] == 'Cancelada' ? 'selected' : '' ?> value="Cancelada">Cancelada</option>
            </select>
          </div>
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Estudiante</label>
            <select id="sexo" name="estudiante" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="">Seleccione un estudiante</option>
              <?php
              if (count($estudiantes) > 0) :
                foreach ($estudiantes as $estudiante) : ?>
                  <option <?= $estudiante['id_estudiante'] == $data['estudiante'] ? 'selected' : ''; ?> value="<?= $estudiante['id_estudiante'] ?>"> <?= $estudiante['nombre'] ?> <?= $estudiante['apellido'] ?></option>
              <?php endforeach;
              endif; ?>
            </select>
          </div>
        </div>
        <div class="relative w-full mb-3 px-5">
          <div id="pecesSelecr" class="col-span-6 sm:col-span-3 rounded-md border border-gray-300 bg-white py-2 px-3">
            <label for="country" class="block text-sm font-medium text-gray-700">Paciente</label>
            <select id="sexo" name="paciente" autocomplete="country-name" class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
              <option value="">Seleccione un paciente</option>
              <?php
              if (count($pacientes) > 0) :
                foreach ($pacientes as $estudiante) :
              ?>
                  <option <?= $estudiante['id_paciente'] == $data['paciente'] ? 'selected' : '' ?> value="<?= $estudiante['id_paciente'] ?>"> <?= $estudiante['nombre'] ?> </option>
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