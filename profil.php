<?php
include_once 'header.php';
include_once 'sidebar.php';
?>

<!-- main.php -->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">PROFIL</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">

<?php
 $nama = 'Dwi Nurohmad';
 $nampil = 'Dwi';
 $umur = 20;
 $hobi = 'Olahraga';
 $cita = 'Jadi Orang yang Bermanfaat';
 $kota = 'Bogor';
 $asli = 'Bogor';
 $kata = 'Jalanin Aja Dulu (Just Do It)';

 echo 'Nama : ' . $nama;
 echo '<br/>Nama Panggilan : '.$nampil;
 echo '<br/>Umur : ' . $umur.' Tahun';
 echo '<br/>Hobi : ' . $hobi;
 echo '<br/>Cita-Cita : ' . $cita;
 echo '<br/>Domisili : ' . $kota;
 echo '<br/>Kota Lahir : ' . $asli;
 echo '<br/>Kata-Kata Hari Ini : ' . $kata;
?>

<?php
include_once 'footer.php';
?>