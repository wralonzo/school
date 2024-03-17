</div>
</div>
<div class="px-4 md:px-12 mx-auto w-full -m-24">
  <div class="flex-auto px-4 lg:px-10 py-20 pt-0">

    <form method="POST" action="<?= base_url() ?>conyugue/editar/<?= $user_data['paciente'] ?>">
      <div class="relative w-full mb-3 px-5">
        <h2 class="text-xs text-white font-bold text-2xl text-center mb-5">Detalle del conyugue</h2>
      </div>
      <div id="main" class="grid grid-rows-3 grid-flow-col">

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-xs text-white font-bold mb-2" for="grid-password">Nombre</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="nombre" name="nombre" value="<?= $user_data['nombre'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">ocupacion</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="ocupacion" name="ocupacion" value="<?= $user_data['ocupacion'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase  text-blueGray-600 text-xs font-bold mb-2" for="grid-password">observacion</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="observacion" name="observacion" value="<?= $user_data['observacion'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">escolaridad</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="escolaridad" name="escolaridad" value="<?= $user_data['escolaridad'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">edad</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="edad" name="edad" value="<?= $user_data['edad'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">lugar familia</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="lugar_familia" name="lugar_familia" value="<?= $user_data['lugar_familia'] ?>" />
        </div>

        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-white text-xs font-bold mb-2" for="grid-password">direccion</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="direccion" name="direccion" value="<?= $user_data['direccion'] ?>" />
        </div>
        <div class="relative w-full mb-3 px-5">
          <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">telefono</label>
          <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="telefono" name="telefono" value="<?= $user_data['telefono'] ?>" />
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