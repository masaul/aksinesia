<?php 
    require "database.php";
    function query($dataQuery){
        global $databaseConn;
        $result = mysqli_query($databaseConn, $dataQuery);
        $data = [];
        // 1. mysqli_fetch_row()  => mengembalikan array numerik
        // 2. mysqi_fetch_assoc() => mengembalikan array assoc
        // 3. mysqli_fetch_array() => mengembalikan array numerik dan assoc
        // 4. mysqli_fetch_object() => mengembalikan objek
        while($dataAdmin = mysqli_fetch_assoc($result)){
            $data[] = $dataAdmin;
        }
        return $data;
    }
    function upload(){
        // Data yang ada di $_FILES
        $namaFile = $_FILES["gambar"]["name"];
        $sizeFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpFile = $_FILES['gambar']['tmp_name'];
        
        if( $error === 4 ){
            return false;
        }
        // Mengecek format nama
        $formatFile = ['jpg', 'png', 'jpeg', 'jfif'];
        $extendFileFormat = explode('.', $namaFile);
        $extendFileFormat = strtolower(end($extendFileFormat));
        if(!in_array($extendFileFormat, $formatFile)){
            echo "Format file yang tersedia: jpg, jpeg, png, jfif";
            return false;
        }
    
        // Mengecek ukuran file
        if($sizeFile > 5000000){
            echo "Ukuran File maks 5MB";
            return false;
        }
    
    
        // Generate nama yg UNIQ
        $fileBaru = uniqid();
        $fileBaru .= '.';
        $fileBaru .= $extendFileFormat;
    
        move_uploaded_file($tmpFile, '../../assets/img/profile/' . $fileBaru);
        return $fileBaru;
    }
    function edit($data){
        global $databaseConn;
    
        $id = $data["id"];
        $username = htmlspecialchars($data["username"]); // Digunakan untuk antisipasi tag html dimasukkan di form
        $email = htmlspecialchars($data["email"]);
        $password = $data["password"];
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else{
            $gambar = upload();
        }

        $password = password_hash($password, PASSWORD_DEFAULT);

        $query = "UPDATE tbl_admin SET username_admin='$username',email_admin='$email',password='$password',image='$gambar' WHERE id_admin = $id";
        // $query = "UPDATE tbl_admin SET username='$username',email='$email', password='$password', gambar='$gambar' WHERE id_admin = $id";
        mysqli_query($databaseConn, $query);
    
        return mysqli_affected_rows($databaseConn);
    }
    function delete($id){
        global $databaseConn;
    
        $query = "DELETE FROM users WHERE id = $id";
        mysqli_query($databaseConn, $query);
    
        return mysqli_affected_rows($databaseConn);
    }
    function deletePesan($id){
        global $databaseConn;
    
        $query = "DELETE FROM tbl_contact WHERE id_pesan = $id";
        mysqli_query($databaseConn, $query);
    
        return mysqli_affected_rows($databaseConn);
    }
    function deleteKonsultasi($id){
        global $databaseConn;
    
        $query = "DELETE FROM tbl_consult WHERE id_consult = $id";
        mysqli_query($databaseConn, $query);
    
        return mysqli_affected_rows($databaseConn);
    }
    function editLayanan($data){
        global $databaseConn;
    
        $id = $data["id_layanan"];
        $nama = htmlspecialchars($data["nama_layanan"]); // Digunakan untuk antisipasi tag html dimasukkan di form
        $detail = htmlspecialchars($data["detail_layanan"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        if($_FILES['gambar']['error'] === 4){
            $gambar = $gambarLama;
        } else{
            $gambar = upload();
        }

        $query = "UPDATE tbl_admin SET username_admin='$nama',email_admin='$detail',image='$gambar' WHERE id_layanan = $id";
        // $query = "UPDATE tbl_admin SET username='$username',email='$email', password='$password', gambar='$gambar' WHERE id_admin = $id";
        mysqli_query($databaseConn, $query);
    
        return mysqli_affected_rows($databaseConn);
    }

?>