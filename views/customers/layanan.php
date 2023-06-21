
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

    <title>Dashboard Customers</title>

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
        <?php include '../../layouts/sidebar-customers.php'; ?>
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
              <?php include "../../layouts/greeting-customers.php"; ?>
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <?php include "../../layouts/navbar-customers.php"; ?>
                <!--/ User -->
              </ul>
            </div>
          </nav>
          <div class="container mt-3">
            <h3 class="fw-bold">Layanan Tersedia</h3>
            <div class="row">
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <h5 class="card-title text-center mt-3 fw-bold">Digital Marketing</h5>
                  <img class="img-fluid" src="../../assets/img/layanan/digital-marketing-index.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <ul class="card-text">
                      <li>Manage Team Business Online</li>
                      <li>Pelatihan & Sertifikasi Digital Marketing No Ads</li>
                      <li>Edukasi Kewirausahaan Untuk Persiapan Pensiunan atau Purnabakti</li>
                    </ul>
                    <div class="text-center">
                      <a href="view-layanan.php?id=1" class="btn btn-outline-primary mb-2">Lihat Detail</a>
                      <a href="consult-service.php" class="btn btn-outline-primary mb-2">Konsultasi Sekarang</a>
                      <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn btn-outline-primary">Konsultasi Via Whatsapp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <h5 class="card-title text-center mt-3 fw-bold">Team Building</h5>
                  <img class="img-fluid" src="../../assets/img/layanan/team-building-index.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <ul class="card-text">
                      <li>Employee Gathering</li>
                      <li>Family Gathering</li>
                      <li>Fun Games</li>
                      <li>Outbound Training</li>
                      <li>Outbound Training Based on Competency</li>
                    </ul>
                    <div class="text-center">
                      <a href="view-layanan.php?id=2" class="btn btn-outline-primary mb-2">Lihat Detail</a>
                      <a href="consult-service.php" class="btn btn-outline-primary mb-2">Konsultasi Sekarang</a>
                      <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn btn-outline-primary">Konsultasi Via Whatsapp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <h5 class="card-title text-center mt-3 fw-bold">Motivational & Inspirasional Session</h5>
                  <img class="img-fluid" src="../../assets/img/layanan/motivation-index.jpg" alt="Card image cap" />
                  <div class="card-body">
                    <ul class="card-text">
                      <li>Achievement Motivation</li>
                      <li>Motivasi Bekerja</li>
                      <li>Manajemen Stres</li>
                      <li>Produktivitas Kerja</li>
                      <li>Spiritual Motivation</li>
                    </ul>
                    <div class="text-center" style="margin-top: 40px;">
                      <a href="view-layanan.php?id=4" class="btn btn-outline-primary mb-2">Lihat Detail</a>
                      <a href="consult-service.php" class="btn btn-outline-primary mb-2">Konsultasi Sekarang</a>
                      <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn btn-outline-primary">Konsultasi Via Whatsapp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <h5 class="card-title text-center mt-3 fw-bold">Communication</h5>
                  <img class="img-fluid" src="../../assets/img/layanan/communication-index.png" alt="Card image cap" />
                  <div class="card-body">
                    <ul class="card-text">
                      <li>Hypnosis and NLP Training</li>
                      <li>Komunikasi dan Kerjasama Tim</li>
                      <li>Pelatihan & Sertifikasi Service Excellence (Pelayanan Prima)</li>
                      <li>Public Speaking and Ice Breaking</li>
                      <li>Teknik Closing dan Negosiasi</li>
                      <li>Teknik Presentasi</li>
                    </ul>
                    <div class="text-center">
                      <a href="view-layanan.php?id=3" class="btn btn-outline-primary mb-2">Lihat Detail</a>
                      <a href="consult-service.php" class="btn btn-outline-primary mb-2">Konsultasi Sekarang</a>
                      <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn btn-outline-primary">Konsultasi Via Whatsapp</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-3">
                <div class="card h-100">
                  <h5 class="card-title text-center mt-3 fw-bold">Custom Capacity Building</h5>
                  <img class="img-fluid" src="../../assets/img/layanan/capaicity1.jfif" alt="Card image cap" />
                  <div class="card-body">
                    <ul class="card-text">
                      <li>ToT (Training of Trainer)</li>
                      <li>Seminar, Webinar, Workshop, Training, Talkshow, Diklat</li>
                    </ul>
                    <div class="text-center" style="margin-top: 100px;">
                      <a href="view-layanan.php?id=5" class="btn btn-outline-primary mb-2">Lihat Detail</a>
                      <a href="consult-service.php" class="btn btn-outline-primary mb-2">Konsultasi Sekarang</a>
                      <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn btn-outline-primary">Konsultasi Via Whatsapp</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
