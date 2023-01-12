<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <?php

    //Include file koneksi, untuk koneksikan ke database
    include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    //Cek apakah ada nilai yang dikirim menggunakan methos GET dengan nama id_peserta
    if (isset($_GET['id_peserta'])) {
        $id_peserta=input($_GET["id_peserta"]);

        $sql="select * from daftar_pelanggan where id_peserta=$id_peserta";
        $hasil=mysqli_query($kon,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    //Cek apakah ada kiriman form dari method post
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_peserta=htmlspecialchars($_POST["id_peserta"]);
        $nama_pembeli=input($_POST["nama_pembeli"]);
        $paket_menu_ayam=input($_POST["paket_menu_ayam"]);
        $jumlah_pesanan=input($_POST["jumlah_pesanan"]);
        $no_meja=input($_POST["no_meja"]);
        $total_biaya=input($_POST["total_biaya"]);

        //Query update data pada tabel anggota
        $sql="update daftar_pelanggan set
			nama_pembeli='$nama_pembeli',
			paket_menu_ayam='$paket_menu_ayam',
			jumlah_pesanan='$jumlah_pesanan',
			no_meja='$no_meja',
			total_biaya='$total_biaya'
			where id_peserta=$id_peserta";

        //Mengeksekusi atau menjalankan query diatas
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Update Data</h2>


    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama Pembeli :</label>
            <input type="text" name="nama_pembeli" class="form-control" placeholder="Masukan Nama Pembeli" required />

        </div>
        <div class="form-group">
            <label>Paket Menu Ayam :</label>
            <input type="text" name="paket_menu_ayam" class="form-control" placeholder="Masukan Paket Menu Ayam" required/>
        </div>
        <div class="form-group">
            <label>Jumlah Pesanan :</label>
            <input type="text" name="jumlah_pesanan" class="form-control" placeholder="Masukan Jumlah Pesanan" required/>
        </div>
        <div class="form-group">
            <label>Nomor Meja:</label>
            <input type="text" name="no_meja" class="form-control" placeholder="Masukan No Meja" required/>
        </div>
        <div class="form-group">
            <label>Total Biaya:</label>
            <textarea name="total_biaya" class="form-control" rows="5"placeholder="Masukan Total Biaya" required></textarea>
        </div>

        <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>