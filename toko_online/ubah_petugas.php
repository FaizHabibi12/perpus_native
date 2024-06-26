<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Ubah Petugas</title>
</head>
<body>
    <?php 
    include "koneksi.php";
    // Periksa apakah id_petugas diset dan valid
    if(isset($_GET['id_petugas'])) {
        $qry_get_petugas = mysqli_query($toko_online, "SELECT * FROM toko_petugas WHERE id_petugas = '".$_GET['id_petugas']."'");
        $dt_petugas = mysqli_fetch_array($qry_get_petugas);

        // Periksa apakah data petugas ditemukan
        if($dt_petugas) {
    ?>
    <h3>Ubah Petugas</h3>
    <form action="proses_ubah_petugas.php" method="post">
        <!-- Tambahkan input hidden untuk menyimpan id_petugas -->
        <input type="hidden" name="id_petugas" value="<?= $dt_petugas['id_petugas'] ?>">
        Nama Petugas:
        <!-- Isi nilai input dengan nama_petugas dari database -->
        <input type="text" name="nama_petugas" value="<?= $dt_petugas['nama_petugas'] ?>" class="form-control">
        Username:
        <!-- Isi nilai input dengan deskripsi dari database -->
        <input type="text" name="username" value="<?= $dt_petugas['username'] ?>" class="form-control">
        Password:
        <!-- Isi nilai input dengan harga dari database -->
        <input type="text" name="password" value="" class="form-control">
        Level:
        <!-- Isi nilai input dengan harga dari database -->
        <input type="text" name="level" value="<?= $dt_petugas['level'] ?>" class="form-control">

        <input type="submit" name="simpan" value="Ubah Petugas" class="btn btn-primary">
    </form>
    <?php
        } else {
            echo "<p>Data Petugas tidak ditemukan.</p>";
        }
    } else {
        echo "<p>ID Petugas tidak valid.</p>";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
