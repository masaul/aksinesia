<?php 
if(isset($_POST['submit'])){
    header("Location: login.php ");
}

?>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
    <div class="container">
        <div class="logo-nav d-flex flex-row align-items-center">
            <div class="image-log"></div>
            <img src="assets/img/logo-nav.png" alt="Logo" width="80" height="57" class="d-inline-block align-text-top">
            <a class="navbar-brand title-nav" href="index.php">
                PT AKSINESIA
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav m-auto mb-2 mb-lg-0 navbar-menus">
            <li class="nav-item">
                <a class="nav-link" onclick="navbarMenus()" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="navbarMenus()" href="profile.php">Profil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="navbarMenus()" href="layanan.php">Layanan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="navbarMenus()" href="contact.php">Kontak</a>
            </li>
        </ul>
        <form class="d-flex" method="POST" action="">
            <button class="btn btn-warning" type="submit" name="submit">Login</button>
        </form>
        </div>
    </div>
</nav>