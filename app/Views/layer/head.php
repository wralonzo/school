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
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/select.css" />
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font.css" />

  <script src="https://unpkg.com/jquery/dist/jquery.min.js"></script>
  <script src="https://unpkg.com/gridjs-jquery/dist/gridjs.production.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/gridjs/dist/theme/mermaid.min.css" />
  <style>
    body {
      background-color: #f7f7f7;
    }

    @media (min-width: 991.98px) {
      main {
        padding-left: 240px;
      }
    }

    /* Sidebar */
    .sidebar {
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      padding: 58px 0 0;
      /* Height of navbar */
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 5%), 0 2px 10px 0 rgb(0 0 0 / 5%);
      width: 240px;
      z-index: 600;
      background-color: #ffef0e;
    }

    @media (max-width: 991.98px) {
      .sidebar {

        background-color: #ffef0e;
        width: 100%;
      }
    }

    .sidebar .active {
      border-radius: 5px;
      box-shadow: 0 2px 5px 0 rgb(0 0 0 / 16%), 0 2px 10px 0 rgb(0 0 0 / 12%);
    }

    .sidebar-sticky {
      position: relative;
      top: 0;
      height: calc(100vh - 48px);
      padding-top: 0.5rem;
      overflow-x: hidden;
      overflow-y: auto;
      /* Scrollable contents if viewport is shorter than content. */
    }

    /* Cambiar el color al pasar el mouse sobre el div */
    .color-change:hover {
      background-color: rgb(38, 172, 33);
      /* Nuevo color cuando el mouse está sobre el div */
    }

    .list-group {
      --mdb-list-group-action-hover-bg: red
    }
  </style>
</head>

<body>
  <!-- Start your project here-->
  <!--Main Navigation-->
  <header>
    <!-- Sidebar -->
    <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse" style="background-color: #fe7c01;">
      <div class="position-sticky">
        <div class="list-group list-group-flush mt-4">
          <a href="<?php echo base_url() ?>" class="list-group-item list-group-item-action py-2 ripple color-change" aria-current="true">
            <i class="fas fa-tachometer-alt fa-fw me-3 text-white"></i><span class="text-white">Home</span>
          </a>
          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>user/list" class="list-group-item list-group-item-action py-2 ripple  color-change"><i class="fas fa-lock fa-fw me-3 text-white"></i><span class="text-white">Usuarios</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>father" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-chart-line fa-fw me-3 text-white"></i><span class="text-white">Padres</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>teacher" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-calendar fa-fw me-3 text-white"></i><span class="text-white">Maestros</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador' || session()->get('role') == 'Maestro') : ?>
            <a href="<?php echo base_url() ?>student" class="list-group-item list-group-item-action py-2 ripple"><i class="fas fa-chart-pie fa-fw me-3 text-white"></i><span class="text-white">Alumnos</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>event" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-chart-bar fa-fw me-3 text-white"></i><span class="text-white">Eventos</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>class" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-globe fa-fw me-3 text-white"></i><span class="text-white">Clases</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador' || session()->get('role') == 'Padre' || session()->get('role') == 'Alumno' || session()->get('role') == 'Maestro') : ?>
            <a href="<?php echo base_url() ?>cook" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-building fa-fw me-3 text-white"></i><span class="text-white">Comidas</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>event/attendance/list" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-chart-line fa-fw me-3 text-white"></i><span class="text-white">Asistencia evento</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador') : ?>
            <a href="<?php echo base_url() ?>class/attendance/list" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-calendar fa-fw me-3 text-white"></i><span class="text-white">Asistencia clase</span></a>
          <?php endif; ?>

          <?php if (session()->get('role') == 'Administrador' || session()->get('role') == 'Padre' || session()->get('role') == 'Alumno' || session()->get('role') == 'Maestro') : ?>
            <a href="<?php echo base_url() ?>cook/attendance/list" class="list-group-item list-group-item-action py-2 ripple color-change"><i class="fas fa-globe fa-fw me-3 text-white"></i><span class="text-white">Registro de comidas</span></a>
          <?php endif; ?>
        </div>
      </div>
    </nav>
    <!-- Sidebar -->


    <!-- Navbar -->
    <nav id="main-navbar" class="navbar navbar-expand-lg navbar-indigo fixed-top" style="background-color: #3D5AFE;">
      <!-- Container wrapper -->
      <div class="container-fluid">
        <!-- Toggle button -->
        <button class="navbar-toggler" type="button" data-mdb-collapse-init data-mdb-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>

        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <h3 class="text-white"> HEALTHY NUTRITION METER, H&M, Colegio El Faro <strong><?= session()->get('role') ?></strong></h3>
        </a>

        <!-- Right links -->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!-- Notification dropdown -->
          <!-- <li class="nav-item dropdown">
            <a data-mdb-dropdown-init class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li> -->

          <!-- Icon -->
          <!-- <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li> -->
          <!-- Icon -->
          <!-- <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li> -->
          <!-- Avatar -->
          <li class="nav-item dropdown">
            <a data-mdb-dropdown-init class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp" class="rounded-circle" height="22" alt="Avatar" loading="lazy" />
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
              <!-- <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li> -->
              <li>
                <a class="dropdown-item" href="<?php echo base_url() ?>login/logout">Salir</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main style="margin-top: 58px;">
    <div class="container pt-4">