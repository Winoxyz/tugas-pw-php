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
            <h1>TUGAS</h1>
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
          <h3 class="card-title">Tugas Web2</h3>

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

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<h1>Form Registrasi IT Club Data Science</h1>
<form>
  <div class="form-group row">
    <label for="nim" class="col-4 col-form-label">NIM</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-adn"></i>
          </div>
        </div> 
        <input id="nim" name="nim" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="nl" class="col-4 col-form-label">Nama Lengkap</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-address-card"></i>
          </div>
        </div> 
        <input id="nl" name="nl" type="text" class="form-control">
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Jenis Kelamin</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_0" type="radio" class="custom-control-input" value="lk"> 
        <label for="jk_0" class="custom-control-label">Laki-Laki</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="jk" id="jk_1" type="radio" class="custom-control-input" value="pr"> 
        <label for="jk_1" class="custom-control-label">Perempuan</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="ps" class="col-4 col-form-label">Program Studi</label> 
    <div class="col-8">
      <select id="ps" name="ps" class="custom-select">
        <option value="ti">Teknik Informatika</option>
        <option value="si">Sistem Informasi</option>
        <option value="bd">Bisnis Digital</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Skill Web &amp; Programming</label> 
    <div class="col-8">
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_0" type="checkbox" class="custom-control-input" value="html"> 
        <label for="sp_0" class="custom-control-label">HTML</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_1" type="checkbox" class="custom-control-input" value="css"> 
        <label for="sp_1" class="custom-control-label">CSS</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_2" type="checkbox" class="custom-control-input" value="js"> 
        <label for="sp_2" class="custom-control-label">JavaScript</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_3" type="checkbox" class="custom-control-input" value="rwd"> 
        <label for="sp_3" class="custom-control-label">RWD Bootstrap</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_4" type="checkbox" class="custom-control-input" value="php"> 
        <label for="sp_4" class="custom-control-label">PHP</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_5" type="checkbox" class="custom-control-input" value="python"> 
        <label for="sp_5" class="custom-control-label">Python</label>
      </div>
      <div class="custom-control custom-checkbox custom-control-inline">
        <input name="sp" id="sp_6" type="checkbox" class="custom-control-input" value="java"> 
        <label for="sp_6" class="custom-control-label">Java</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="td" class="col-4 col-form-label">Tempat Domisili</label> 
    <div class="col-8">
      <select id="td" name="td" class="custom-select">
        <option value="jakarta">Jakarta</option>
        <option value="depok">Depok</option>
        <option value="medan">Medan</option>
        <option value="bogor">Bogor</option>
        <option value="tanggerang">Tanggerang</option>
        <option value="semarang">Semarang</option>
      </select>
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <i class="fa fa-etsy"></i>
          </div>
        </div> 
        <input id="email" name="email" type="text" class="form-control">
      </div>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<?php
$nim = $_POST['nim'];
$nl = $_POST['nl'];
$jk = $_POST['jk'];
$ps = $_POST['ps'];
$sp = $_POST['sp'];
$td = $_POST['td'];
$email = $_POST['email'];

//cetak hasil
echo "<br>";
echo "NIM : $nim <br>";
echo "Nama Lengkap : $nl <br>";
echo "Jenis Kelamin : $jk <br>";
echo "Program Studi : $ps <br>";
echo "Skill Web&Programming : $sp <br>";
echo "Tempat Domisili : $td <br>";
echo "Email : $email <br>";

?>

</div>
              <!-- /.card-body -->
              <div class="card-footer">
                Footer
              </div>
              <!-- /.card-footer-->
            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



<?php
include_once 'footer.php';
?>