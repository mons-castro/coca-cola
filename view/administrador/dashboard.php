<?php
ob_start();
session_start();
include('../../controller/adminController.php');
$admin = new AdminController();

if (!isset($_SESSION['correo'])) {
  header('Location: ../auth/inicio-sesion/iniciar-sesion.php');
  exit();
} else {
  if (time() - $_SESSION['login_timestamp'] > 3600) {
    session_unset();
    session_destroy();
    header('Location: ../auth/inicio-sesion/iniciar-sesion.php');
    exit();
  }
?>
  <!DOCTYPE html>
  <html lang="es">

  <head>

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
      <link rel="stylesheet" href="../../src/css/nucleo.css">
      <link rel="stylesheet" href="../../src/css/fonts.css">
      <link rel="stylesheet" href="../../src/css/argon.min.css">
      <link rel="stylesheet" href="../../src/css/animate.css">
      <link rel="stylesheet" href="../../src/css/dashboard.css">

      <!-- Mapbox CDN -->
      <script src='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.js'></script>
      <link href='https://api.mapbox.com/mapbox-gl-js/v1.12.0/mapbox-gl.css' rel='stylesheet' />
      <link rel="shortcut icon" href="../../src/media/favicon.ico" type="image/x-icon">
      <link rel="icon" href="../../src/media/favicon.ico" type="image/x-icon">
      <title>Empoderamiento de Mujeres y Pequeños Negocios | Administrador</title>
    </head>
  </head>

  <body>
    <div class="main-content" id="panel">
      <!-- Navbar -->
      <?php include('./menu.php'); ?>

      <!-- Header -->
      <div class="header bg-gradient-default pb-6">
        <div class="container-fluid">
          <div class="header-body">
            <div class="py-4">
            </div>
            <?php
            include('./contadores.php');
            ?>
          </div>
        </div>
      </div>

      <?php
      if (isset($_GET['createFAQ'])) {
        include('./preguntas.php');
      } else if (isset($_GET['userManage'])) {
        include('usuarios.php');
      } else if (isset($_GET['schools'])) {
        include('escuelas.php');
      } else if (isset($_GET['globalUsers'])) {
        include('usuarios_globales.php');
      } else if (isset($_GET['map'])) {
        include('map.php');
      } else if (isset($_GET['est']) && $_GET['usr'] == 1) {
        include('capacitados.php');
      } else if (isset($_GET['est']) && $_GET['usr'] == 2) {
        include('promotores.php');
      } else if (isset($_GET['est']) && $_GET['usr'] == 3) {
        include('supervisores.php');
      } else if (isset($_GET['info_negocios'])) {
        include('info_negocios.php');
      } else if (isset($_GET['info_supervisores'])) {
        include('info_supervisores.php');
      } else if (isset($_GET['info_promotores'])) {
        include('info_promotores.php');
        //echo '<script>window.localStorage.setItem("email", "'.$_GET['info_promotores'].'");</script>';
      } else if (isset($_GET['presents'])) {
        include('presents.php');
      } else if (isset($_GET['finalizados'])) {
        include('capacitados_finalizados.php');
      } else if (isset($_GET['settings'])) {
        include('settings.php');
      } else {
        include('./estadisticas.php');
        echo '<script>window.localStorage.clear()</script>';
      }
      ?>
    </div>
  </body>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="../../src/js/argon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@0.7.0"></script>
  <script src="../../src/js/settingsCode.js"></script>
  <script src="../../src/js/host.js"></script>
  <script src="../../src/js/stats.js"></script>
  <script src="../../src/js/admin.js"></script>
  <script src="../../src/js/faq.js"></script>
  <script src="../../src/js/update.js"></script>
  <script src="../../src/js/pagination.js"></script>
  </body>

  </html>
<?php
}
ob_end_flush();
?>