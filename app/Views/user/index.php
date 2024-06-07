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
        @font-face {
            font-family: ' Century Gothic,CenturyGothic,AppleGothic,sans-serif';
            font-style: normal;
            font-weight: normal;
            src: url('../font/font.ttf') format('truetype');
        }

        body {
            font-family: ' Century Gothic,CenturyGothic,AppleGothic,sans-serif';
            font-size: 15px;
            font-weight: normal;

        }

        .gradient-custom {
            /* fallback for old browsers */
            background: #6a11cb;

            /* Chrome 10-25, Safari 5.1-6 */
            background: -webkit-linear-gradient(to right, rgb(10, 150, 255), rgb(0, 120, 255));

            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            background: linear-gradient(to right, rgb(10, 150, 255), rgba(0, 120, 255))
        }

        img {
            border-radius: 50%;
            position: absolute;
            margin-left: 0px;
            /* very important for the image to be centered */
            left: 30%;
            top: -50px;
        }
    </style>
</head>

<body>
    <section class="vh-100 gradient-custom">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-white text-primary" style="border-radius: 1rem;">
                        <div class="text-center">
                            <img src="../../../images/login.jpeg" alt="text" width="40%">
                        </div>
                        <form action="<?= base_url() ?>/login/login" method="POST">
                            <div class="card-body text-center">
                                <div class="mb-md-5 mt-md-4 pb-5">
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <br>
                                    <h2 class="fw-bold text-uppercase">Inicio de sesión</h2>
                                    <br>
                                    <?php if (session()->get('msg')) : ?>
                                        <h5 style="color: red"><?= session()->get('msg'); ?></h5>
                                    <?php endif ?>
                                    <br>
                                    <div data-mdb-input-init class="form-outline form-primary mb-4">
                                        <input type="text" name="txtUsuario" class="form-control form-control-lg text-primary" />
                                        <label class="form-label text-primary" for="txtUsuario">Usuario</label>
                                    </div>
                                    <br>
                                    <div data-mdb-input-init class="form-outline form-primary mb-4">
                                        <input type="password" name="txtClave" class="form-control form-control-lg text-primary" />
                                        <label class="form-label text-primary" for="txtClave">Contraseña</label>
                                    </div>
                                    <br>
                                    <input class="btn btn-outline-primary btn-lg px-5 text-primary" type="submit" value="Iniciar sesión">
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