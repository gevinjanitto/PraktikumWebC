<?php session_start(); 
 if(!isset($_SESSION['email']))
  {
    header('location:../index.php');
    exit(); 
  }?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>MAHASISWA</title>

<link href="../css/bootstrap1.min.css" rel="stylesheet">

<link href="../css/simplesidebar.css" rel="stylesheet">
<link href="../css/stylee.css" rel="stylesheet">


</head>
<body>
<div id="wrapper">
<!-- side bar -->
<div id="sidebar-wrapper" style="padding-top:50px;">   
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- Beranda -->
  <div class="pinggir"><br>
      <div class="panel panel-default" style="color:black">
     <a href="data.php" style="text-decoration:none; color:black;">DATA DIRI</a>
      </div><br>
     <a href="mahasiswa.php" style="text-decoration:none; color:white;">DAFTAR MAHASISWA</a><br><br>
     <a href="dosen.php" style="text-decoration:none; color:white;">DAFTAR DOSEN</a><br><br>
     <a href="kelas.php" style="text-decoration:none; color:white;">DAFTAR KELAS</a><br><br>
     <a href="bimbingan.php" style="text-decoration:none; color:white;">DAFTAR BIMBINGAN</a><br><br>
     <a href="krs.php" style="text-decoration:none; color:white;">KRS</a><br>
  </div>
</div>
</div>
<!-- content -->
</form>
<div id="page-content-wrapper">
<!-- title -->
<div class="container-fluid">
<div style="margin-top:45px;"></div>         
</div>
<!-- title -->
<div class="container-fluid"> 
<!-- breadcrumb -->
<ol class="breadcrumb">
  <li><a href="data.php">Mahasiswa</a></li>
  <li class="active">Data Pribadi Mahasiswa UNUD</li>
</ol>
<!-- title -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <p style="font-size:23px;color:#000000;"><b></span> DATA PRIBADI MAHASISWA UNUD</b></p>
    <hr style="border:1px solid #000000;padding:0;margin:0px 0px 20px 0px;">
    </div>
</div>
<!-- Form -->
<?php
      $koneksi = mysqli_connect("localhost","root","","web") or die(mysqli_error());
      $email=$_SESSION['email'];
      $sql = mysqli_query($koneksi, "SELECT * FROM user_login INNER JOIN mahasiswa ON user_login.email_user = mahasiswa.email_mhs WHERE mahasiswa.email_mhs = '$email'");
      $row = mysqli_fetch_assoc($sql);
      $data = mysqli_fetch_array($sql);
      ?>
<div style="text-align:right;">
    <?php
            error_reporting(0);
            $koneksi = mysqli_connect("localhost","root","","web") or die(mysqli_error());
            if(isset($_POST['up'])){
              $nama = $_POST['nama'];
              $telp = $_POST['telp'];
              $alamat = $_POST['alamat'];
              $kab  = $_POST['kab'];
              $kelamin = $_POST['kelamin'];
              $tgl  = $_POST['tgl'];
              $tmp  = $_POST['tmp'];
              $pass  = $_POST['pass'];
              $mysqli  = "UPDATE `mahasiswa` SET `nama_mhs`='$nama',`telp_mhs`='$telp',`alamat_mhs`='$alamat' ,`kabkot_mhs`='$kab',`jk_mhs`='$kelamin',`tgllahir_mhs`='$tgl',`tmplahir_mhs`='$tmp',`email_mhs`='$email' WHERE `mahasiswa`.`email_mhs`='$email'";
              $rst=mysqli_query($koneksi, $mysqli);
              $mysqli1  = "UPDATE `user_login` SET `password_user`='$pass' WHERE `user_login`.`email_user`='$email'";
              $rst1=mysqli_query($koneksi, $mysqli1);
              if($rst && $rst1){
              echo '<script language="javascript">alert("UPDATE DATA MAHASISWA berhasil!");document.location="data.php";</script>';
              }
              else{
              echo '<script language="javascript">alert("UPDATE DATA MAHASISWA GAGAL!");document.location="data.php";</script>';
            }
            }
            ?>
    <form action="" method="POST" onsubmit="return cek()" enctype="multipart/form-data">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="row" style="margin-top:10px;font-size:13px;">
             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              NIM <font color="red"><b>*</b></font>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
              <input type="text" name="nim" class="form-control" value="<?php echo $row['nim_mhs']; ?>" readonly>
            </div>
        </div>
        <div class="row" style="margin-top:10px;font-size:13px;">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Nama Lengkap <font color="red"><b>*</b></font>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <input type="text" name="nama"class="form-control" value="<?php echo $row['nama_mhs']; ?>">
          </div>
        </div>
        <div class="row" style="margin-top:10px;font-size:13px;">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Tempat/Tgl Lahir <font color="red"><b>*</b></font>
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <input type="text" name="tmp"class="form-control" value="<?php echo $row['tmplahir_mhs']; ?>">
          </div>
          <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
            <input type="date" name="tgl" class="form-control" value="<?php echo $row['tgllahir_mhs']; ?>" >
          </div>
        </div>
        <div class="row" style="margin-top:10px;font-size:13px;">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Jenis Kelamin <font color="red"><b>*</b></font>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12" style="text-align:left;">
            <?php
          if($row['jk_mhs']=="Laki-laki")
          {
            echo "<input type='radio'  name='kelamin'  value='Laki-laki' checked=''>
            Laki-laki
            <input type='radio' name='kelamin'value='Perempuan' >
            Perempuan"; 
          }else if($row['jk_mhs']=="Perempuan"){ 
          echo "<input type='radio'  name='kelamin'  value='Laki-laki' >
            Laki-laki
            <input type='radio' name='kelamin' value='Perempuan' checked='' >
            Perempuan"; 
          }
          else{
            echo "<input type='radio'  name='kelamin'  value='Laki-laki'>
            Laki-laki
            <input type='radio' name='kelamin' value='Perempuan'>
            Perempuan";  
          }
          ?>

          </div>
        </div>
        <div class="row" style="margin-top:10px;font-size:13px;">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Kabupaten/Kota <font color="red"><b>*</b></font>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <select class="form-control" name="kab" >
            <option hidden><?php echo $row['kabkot_mhs']; ?></option>
            <option>Denpasar</option>
            <option>Buleleng</option>
            <option>Karangasem</option>
            <option>Klungkung</option>
            <option>Gianyar</option>
            <option>Badung</option>
            <option>Bangli</option>
            <option>Tabanan</option>
            <option>Jembrana</option>
          </select>
          </div>
        </div>
        <div class="row" style="margin-top:10px;font-size:13px;">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
            Alamat <font color="red"><b>*</b></font>
          </div>
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <input type="text" name="alamat" class="form-control" style="height:100px;" value="<?php echo $row['alamat_mhs']; ?>">
          </div>
        </div>
      <div class="row" style="margin-top:10px;font-size:13px;">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 ">
          No. Telp <font color="red"><b>*</b></font>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <input type="text" name="telp" class="form-control" value="<?php echo $row['telp_mhs']; ?>">
        </div>
      </div>
      <div class="row" style="margin-top:10px;font-size:13px;">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
          Password <font color="red"><b>*</b></font>
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
          <input type="text" name="pass" class="form-control" value="<?php echo $row['password_user']; ?>">
        </div>
      </div>
      <div class="row" style="margin-top:10px;font-size:13px;">
       <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="row" style="margin-top:10px;font-size:13px;">
             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              FAKULTAS <font color="red"><b>*</b></font>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
              <input type="text" name="fak" class="form-control" value="<?php echo $row['fakultas_mhs']; ?>" readonly>
            </div>
        </div>
      </div>
    </div>
      <div class="row" style="margin-top:10px;font-size:13px;">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <div class="row" style="margin-top:10px;font-size:13px;">
             <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
              PRODI <font color="red"><b>*</b></font>
            </div>
            <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
              <input type="text" name="prod" class="form-control" value="<?php echo $row['prodi_mhs']; ?>" readonly>
            </div>
        </div>
    </div>
  </div>
    <div class="row" style="margin-top:10px;font-size:13px;">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4">
          <input class="btn btn-md btn-success" type="submit" value="Simpan" name="up">
        </div>
      </div>
</div>
</div></div>
</div></form>
<!-- container fluid -->
</div>
<!-- test -->
<!-- end wrapper -->
</div>
<!-- end wrapper -->
<!--start navigasi-->
<!-- start navigasi -->
  <nav class="navbar navbar-default navbar-fixed-top" id="navbar-color" style="font-size:13px;">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <div style="margin-left:20px;"><a href="#menu-toggle" id="menu-toggle"><img src="../img/logo.png" widht="200" height="50"><h2 style="color:white;float:right;margin-left:10px;margin-top: 7px;: bold"><b>UNIVERSITAS UDAYANA</b></h2></a></div>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="#" id="navbar-color"><span id="clock"></span> </a></li>
          <li class="dropdown">
            <?php $sql = mysqli_query($koneksi, "SELECT * FROM user_login WHERE email_user = '$email'");
            $row = mysqli_fetch_assoc($sql);?>
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="navbar-color"><img src="../img/3.png" width="20" height="20"> Welcome,<?php if($row['id_role']=='1'){echo "Admin";} else if($row['id_role']=='2'){echo "Dosen";} else{echo "Mahasiswa";}?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../nasabah/data.php">Pengaturan</a></li>
              <li><a href="../proses/logout.php">Keluar</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
</div>
</div>
<!-- Waktu -->
<!-- jQuery -->
<script src="../js/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="../js/bootstrap.min.js"></script>
<!-- Menu Toggle Script -->
<script>
$("#menu-toggle").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>
<script>
$("#menu-togglee").click(function(e) {
e.preventDefault();
$("#wrapper").toggleClass("toggled");
});
</script>
<script type="text/javascript">
  function cek()
  {
    if (confirm("Apakah Data Telah Sesuai?")) 
    {
      return true;
    } 
    else 
    {
      alert("Perubahan Dibatalkan !");
      return false;
    }
  }
</script>
</body>
</html>