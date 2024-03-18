</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
    <form method="POST" action="<?= base_url() ?>ficha/editar/<?= $id ?>">
      <div class="relative w-full mb-2 px-5">
        <h2 class="text-xs text-white font-bold text-2xl text-center mb-5">Actualizar detalle de ficha del paciente</h2>
        <a class="bg-indigo-500 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded" onclick="window.print()">Print</a>
      </div>
      <div id="main" class="grid grid-cols-3 gap-3">
        <div class="relative w-full mb-2 px-5">
          <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">datos generales</label>
          <input value="<?= $data['datos_generales'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="datos generales" name="datos_generales" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">situacion familiar</label>
          <input value="<?= $data['situacion_familiar'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion familiar" name="situacion_familiar" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label value="<?= $data['motivo_consulta'] ?>" class="block uppercase  text-white text-xs font-bold mb-2" for="grid-password">motivo de consulta</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="motivo_consulta" name="motivo_consulta" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia de problema</label>
          <input value="<?= $data['historia_problema'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia problema" name="historia_problema" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia patologica</label>
          <input value="<?= $data['historia_patologica'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_patologica" name="historia_patologica" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situacion del ambiente</label>
          <input value="<?= $data['situacion_ambiente'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_ambiente" name="situacion_ambiente" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Historia personal</label>
          <input value="<?= $data['historia_personal'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_personal" name="historia_personal" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situacion laboral</label>
          <input value="<?= $data['situacion_laboral'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_laboral" name="situacion_laboral" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Examen mental</label>
          <input value="<?= $data['examen_mental'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="examen_mental" name="examen_mental" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Apariencia personal</label>
          <input value="<?= $data['apariencia_personal'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="apariencia_personal" name="apariencia_personal" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud de conducta</label>
          <input type="text"  value="<?= $data['actitud_conducta'] ?>" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_conducta" name="actitud_conducta" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud motora</label>
          <input value="<?= $data['actitud_motora'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_motora" name="actitud_motora" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Conciencia</label>
          <input value="<?= $data['conciencia'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="conciencia" name="conciencia" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Animo</label>
          <input value="<?= $data['animo'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="animo" name="animo" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pensamiento</label>
          <input value="<?= $data['pensamiento'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pensamiento" name="pensamiento" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pruebas auxiliares</label>
          <input value="<?= $data['pruebas_auxiliares'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pruebas_auxiliares" name="pruebas_auxiliares" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Criterios de diagnostico</label>
          <input value="<?= $data['criterios_diagnostico'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="criterios_diagnostico" name="criterios_diagnostico" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Evaluacion dsm</label>
          <input value="<?= $data['evaluacion_dsm'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="evaluacion_dsm" name="evaluacion_dsm" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Plan terapeutico</label>
          <input value="<?= $data['plan_terapeutico'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="plan_terapeutico" name="plan_terapeutico" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Metas alcanzadas</label>
          <input value="<?= $data['metas_alcanzadas'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="metas_alcanzadas" name="metas_alcanzadas" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Nombre</label>
          <input value="<?= $data['nombre'] ?>" type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" />
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