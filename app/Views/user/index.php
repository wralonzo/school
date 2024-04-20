<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>School</title>
    <!-- MDB icon -->
    <link rel="icon" href="<?php echo base_url() ?>assets/img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/mdb.min.css" />
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(250, 172, 3), rgb(238, 175, 57));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(236, 128, 4), rgba(238, 175, 57))
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-primary text-white" style="border-radius: 1rem;">
                        <form action="<?= base_url() ?>/login/login" method="POST">
                            <div class="card-body p-5 text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <h2 class="fw-bold mb-2 text-uppercase">Inicio de sesión</h2>
                                    <br>
                                    <?php if (session()->get('msg')) : ?>
                                        <h5 style="color: red"><?= session()->get('msg'); ?></h5>
                                    <?php endif ?>
                                    <br>
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input type="text" name="txtUsuario" class="form-control form-control-lg" />
                                        <label class="form-label" for="txtUsuario">Usuario</label>
                                    </div>
                                    <br>
                                    <div data-mdb-input-init class="form-outline form-white mb-4">
                                        <input type="password" name="txtClave" class="form-control form-control-lg" />
                                        <label class="form-label" for="txtClave">Contraseña</label>
                                    </div>
                                    <br>
                                    <input class="btn btn-outline-light btn-lg px-5" type="submit" value="Iniciar sesión">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MDB -->
    <script type="text/javascript" src="<?php echo base_url() ?>assets/js/mdb.umd.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>