<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/favicon.ico" />
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" />
  <link rel="stylesheet" href="<?= base_url() ?>assets/styles/tailwind.css" />
  <title>Login</title>
</head>

<body class="text-blueGray-700 antialiased">
  <main>
    <section class="relative w-full h-full py-40 min-h-screen">
      <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-full bg-no-repeat" style="background-image: url(<?= base_url() ?>assets/img/register_bg_2.png)"></div>
      <div class="container mx-auto px-4 h-full">
        <div class="flex content-center items-center justify-center h-full">
          <div class="w-full lg:w-4/12 px-4">
            <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-blueGray-200 border-0">
              <div class="flex-auto px-4 lg:px-10 py-10 pt-0">
                <div class="text-blueGray-400 text-center mb-3 font-bold">
                  <small>Login</small>
                </div>
                <form method="POST" action="<?= base_url() ?>login/login">
                  <div class="relative w-full mb-3">
                  <?php if (session()->get('msg')) : ?>
                        <h5 style="color: red"><?=  session()->get('msg'); ?></h5>
                    <?php endif ?>
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Email</label>
                    <input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Email" name="txtUsuario" />
                  </div>
                  <div class="relative w-full mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Password</label>
                    <input type="password" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Password" name="txtClave" />
                  </div>
                  <div class="text-center mt-6">
                    <button class="bg-blueGray-800 text-white active:bg-blueGray-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit">
                      Iniciar sesión
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>
  </main>
</body>

</html>