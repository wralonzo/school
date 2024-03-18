</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">
    <form method="POST" action="<?= base_url() ?>ficha/registrar/<?= $id ?>">
      <div class="relative w-full mb-2 px-5">
        <h2 class="text-xs text-white font-bold text-2xl text-center mb-5">Detalle de ficha del paciente</h2>
      </div>
      <div id="main" class="grid grid-cols-3 gap-3">
        <div class="relative w-full mb-2 px-5">
          <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">datos generales</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="datos generales" name="datos_generales" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">situacion familiar</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion familiar" name="situacion_familiar" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase  text-white text-xs font-bold mb-2" for="grid-password">motivo de consulta</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="motivo_consulta" name="motivo_consulta" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia de problema</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia problema" name="historia_problema" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">historia patologica</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_patologica" name="historia_patologica" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situacion del ambiente</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_ambiente" name="situacion_ambiente" />
        </div>

        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Historia personal</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="historia_personal" name="historia_personal" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Situacion laboral</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="situacion_laboral" name="situacion_laboral" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Examen mental</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="examen_mental" name="examen_mental" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Apariencia personal</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="apariencia_personal" name="apariencia_personal" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud de conducta</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_conducta" name="actitud_conducta" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Actitud motora</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="actitud_motora" name="actitud_motora" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Conciencia</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="conciencia" name="conciencia" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Animo</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="animo" name="animo" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pensamiento</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pensamiento" name="pensamiento" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Pruebas auxiliares</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="pruebas_auxiliares" name="pruebas_auxiliares" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Criterios</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="criterios_diagnostico" name="criterios_diagnostico" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Evaluacion dsm</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="evaluacion_dsm" name="evaluacion_dsm" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Plan terapeutico</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="plan_terapeutico" name="plan_terapeutico" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Metas alcanzadas</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="metas_alcanzadas" name="metas_alcanzadas" />
        </div>
        <div class="relative w-full mb-3 px-5 ">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Nombre</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" />
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