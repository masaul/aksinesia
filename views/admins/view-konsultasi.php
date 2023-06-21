<?php 
require "../../controller/database.php";
$idView = $_GET["id"];
$result = mysqli_query($databaseConn, "SELECT * FROM tbl_consult WHERE id_consult = $idView");

if (isset($_POST["back"])){
    header("Location: consult.php");
}
?>
<!DOCTYPE html>
<html
  lang="id"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../public/sneat/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../../assets/img/logo-nav.png"/>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <!-- CSS saya -->
    <link rel="stylesheet" href="../../assets/css/dashboard-admin.css">
    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../../public/sneat/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../../public/sneat/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../../public/sneat/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../../public/sneat/assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../../public/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../../public/sneat/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../public/sneat/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../public/sneat/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include '../../layouts/sidebar-admin.php'; ?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>
            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <?php include "../../layouts/greeting-admin.php"; ?>
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <?php include "../../layouts/navbar-admin.php"; ?>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <div class="container mt-3">
            <h3 class="fw-bold">Settings</h3>
            <?php foreach ($result as $dataDbs) : ?>
                <div class="waktu mt-2">
                    <label for="waktu" class="fw-bold mb-1">Waktu:</label>
                    <input type="text" id="waktu" class="form-control" value="<?= $dataDbs["waktu"]; ?>" disabled>
                </div>
                <div class="nama mt-2">
                    <label for="nama" class="fw-bold mb-1">Nama Lengkap :</label>
                    <input type="text" id="nama" class="form-control" value="<?= $dataDbs["nama_consult"]; ?>" disabled>
                </div>
                <div class="email mt-2">
                    <label for="email" class="fw-bold mb-1">Email :</label>
                    <input type="text" class="form-control" id="email" value="<?= $dataDbs["email_consult"]; ?>" disabled>
                </div>
                <div class="nohp mt-2">
                    <label for="nohp" class="fw-bold mb-1">No Handphone :</label>
                    <input type="text" class="form-control" id="nohp" value="<?= $dataDbs["nohp_consult"]; ?>" disabled>
                </div>
                <div class="layanan mt-2">
                    <label for="layanan" class="fw-bold mb-1">Layanan :</label>
                    <input type="text" class="form-control" id="layanan" value="<?= $dataDbs["layanan"]; ?>" disabled>
                </div>
                <div class="pesan mt-2">
                    <label for="pesan" class="fw-bold mb-1">Pesan :</label>
                    <textarea class="form-control" name="pesan" id="pesan" cols="30" rows="3" disabled><?= $dataDbs["pesan_consult"]; ?></textarea>
                </div>
                <form action="" method="POST">
                    <div class="col-12 mt-3 mb-5">
                        <button type="submit" name="back" class="btn btn-danger tombol w-100">Back</button>
                    </div>
                </form>
            <?php endforeach; ?>
          </div>
        </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../../public/sneat/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../../public/sneat/assets/vendor/libs/popper/popper.js"></script>
    <script src="../../public/sneat/assets/vendor/js/bootstrap.js"></script>
    <script src="../../public/sneat/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../../public/sneat/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../public/sneat/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../public/sneat/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../public/sneat/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
