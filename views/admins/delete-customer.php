<?php
require "../../controller/admin.php";
$id = $_GET["id"];

if(delete($id) > 0){
    echo 
    "<script> 
        alert('Data Berhasil Dihapus!');
        document.location.href = 'customers.php';
    </script>";
} else{
    "<script> 
        alert('Data Gagal Dihapus!');
        document.location.href = 'customers.php';
    </script>";
}
?>