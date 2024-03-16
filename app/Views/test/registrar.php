</div> </div><div class="px-4 md:px-12 mx-auto w-full -m-24">
<div class="flex-auto px-4 lg:px-10 py-20 pt-0">
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                  <small>Restrar test</small>
                </div>
                <form method="POST" action="<?= base_url() ?>test/registrar">

                <div class="relative w-full mb-3">
                  <label class="block uppercase text-xs text-white font-bold mb-2"
                    for="grid-password">Nombre</label>
                    <input type="text"
                    class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"
                    placeholder="nombre" name="nombre"/>
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