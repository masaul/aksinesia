<?php
require "../../controller/admin.php";
$id = $_GET["id"];

if(deleteKonsultasi($id) > 0){
    echo 
    "<script> 
        alert('Data Berhasil Dihapus!');
        document.location.href = 'consult.php';
    </script>";
} else{
    "<script> 
        alert('Data Gagal Dihapus!');
        document.location.href = 'consult.php';
    </script>";
}
?>