<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="dashboard.php" class="app-brand-link">
    <div class="app-brand-logo demo">
      <img src="../../assets/img/logo-nav.png" alt="Logo" width="50px">
    </div>
      <span class="app-brand-text demo menu-text fw-bolder ms-2">AKSINESIA</span>
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    
    <li class="menu-item <?php $halaman = 'dashboard' ? 'active' : ' '?> ">
      <a href="dashboard.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-item <?php $halaman === true ? 'active' : ' '?> ">
      <a href="pesan.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Pesan</div>
      </a>
    </li>
    <li class="menu-item <?php $halaman === true ? 'active' : ' '?> ">
      <a href="consult.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Konsultasi</div>
      </a>
    </li>
    <li class="menu-item <?php $halaman === true ? 'active' : ' '?> ">
      <a href="customers.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Customers</div>
      </a>
    </li>
    <!-- Components -->
    <li class="menu-header small text-uppercase"><span class="menu-header-text">Advanced</span></li>
    <li class="menu-item <?php $halaman === true ? 'active' : ' '?> ">
      <a href="layanan.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Layanan</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="kontak.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Kontak</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="setting.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Settings</div>
      </a>
    </li>
    <li class="menu-item">
      <a href="../../index.php" class="menu-link">
        <i class="menu-icon tf-icons bx bx-collection"></i>
        <div data-i18n="Basic">Logout</div>
      </a>
    </li>
  </ul>
</aside>