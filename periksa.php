<?php
//1. sertakan koneksi database
require 'dbkoneksi.php';

//2 Query untuk mendapatkan data pasien
$query = $dbh->query('SELECT * FROM periksa');
//$query = $dbh->query('SELECT pasien.*, kelurahan.nama AS kategori FROM pasien INNER JOIN kelurahan ON kelurahan.id = pasien.kelurahan_id');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pasien</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center">Periksa</h2>
        <a href="form_pasien.php"><button class="btn btn-primary mb-1">Tambah Data</button></a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tanggal</th>
                    <th>Berat</th>
                    <th>Tinggi</th>
                    <th>Tensi</th>
                    <th>keterangan</th>
                    <th>ID Pasien</th>
                    <th>ID Dokter</th>
                </tr>
            </thead>
            <tbody>
            <?php    
            // Loop menggunakan foreach untuk menampilkan data pasien
            foreach ($query as $row) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['tanggal'] . "</td>";
                echo "<td>" . $row['berat'] . "</td>";
                echo "<td>" . $row['tinggi'] . "</td>";
                echo "<td>" . $row['tensi'] . "</td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "<td>" . $row['pasien_id'] . "</td>";
                echo "<td>" . $row['dokter_id'] . "</td>";
                //echo "<td>" . $row['kategori'] . "</td>";
                echo "</tr>";
            }  
            ?>                          
            </tbody>
        </table>

    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>

