<?php 
    require "controller/database.php";
    if(isset($_POST["kirim"])){
        date_default_timezone_set('Asia/Jakarta');
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $nohp = $_POST['nohp'];
        $kategori = $_POST['kategori'];
        $pesan = $_POST['pesan'];
        $waktu = date('l, d-m-Y H:i:s');
        $insertToDb = mysqli_query($databaseConn, "INSERT INTO tbl_consult VALUES('', '$nama', '$email', '$nohp', '$kategori','$pesan', '$waktu')");
    }
?>

<section id="form-contact">
    <div class="container">
        <div class="describe-form">
            <h2>Kami telah membantu lebih dari 60 brand Nasional pada strategi #Go-Digital</h2>
        </div>
        <div class="form mt-4">
            <h3>Manfaatkan Konsultasi</h3>
            <p>Isi formulir dibawah ini agar kami dapat segera membantu Anda.</p>
            <form class="row g-3" method="POST" action="">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama">
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="col-12">
                    <label for="nohp" class="form-label">Nomor Telepon</label>
                    <input type="text" class="form-control" name="nohp" id="nohp" placeholder="08XXXXXXXXXX">
                </div>
                <div class="col-md-12">
                    <label for="kategori" class="form-label">Pilih Layanan</label>
                    <select id="kategori" class="form-select" name="kategori">
                        <option selected>Pilih...</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Team Building">Team Building</option>
                        <option value="Communication">Communication</option>
                        <option value="motivation & Inspirasional Session">Motivational & Inspirasional Session</option>
                        <option value="Custom Capacity Building">Custom Capacity Building</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="pesan" class="form-label">Kendala Bisnis Yang Dihadapi</label>
                    <textarea name="pesan" id="pesan" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="col-12">
                    <button type="submit" name="kirim" class="btn btn-warning tombol" style="width:100%;">Kirim</button>
                </div>
                <div class="col-12">
                    <a href="https://wa.me/6283130000564?text=Permisi,%20Saya%20ingin%20konsultasi,%20apakah%20bisa?" class="btn bg-success-subtle w-100">
                        <i class="bi bi-whatsapp"></i> Konsultasi Via Whatsapp
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>