<?php 
require "../../controller/database.php";
$hasil = mysqli_query($databaseConn, "SELECT * FROM tbl_admin");

?>
<li class="nav-item navbar-dropdown dropdown-user dropdown">
    <?php foreach ($hasil as $data) : ?>
    <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
    <div class="avatar avatar-online">
        <img src="../../assets/img/profile/<?= $data["image"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
    </div>
    </a>
    <ul class="dropdown-menu dropdown-menu-end">
    <li>
        <a class="dropdown-item" href="#">
        <div class="d-flex">
            <div class="flex-shrink-0 me-3">
            <div class="avatar avatar-online">
                <img src="../../assets/img/profile/<?= $data["image"]; ?>" alt class="w-px-40 h-auto rounded-circle" />
            </div>
            </div>
            <div class="flex-grow-1">
            <span class="fw-semibold d-block"><?= $data["username_admin"]; ?></span>
            <small class="text-muted">Admin</small>
            </div>
        </div>
        </a>
    </li>
    </ul>
    <?php endforeach; ?>
</li>