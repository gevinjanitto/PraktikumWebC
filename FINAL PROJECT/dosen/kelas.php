<?php session_start(); 
error_reporting(0);
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
<link href="../css/tabell.css" rel="stylesheet">

</head>
<body>
<div id="wrapper">
<!-- side bar -->
<div id="sidebar-wrapper" style="padding-top:50px;">   
  <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
  <!-- Beranda -->
  <div class="pinggir"><br>
     <a href="data.php" style="text-decoration:none; color:white;">DATA DIRI</a><br><br>
     <a href="mahasiswa.php" style="text-decoration:none; color:white;">DAFTAR MAHASISWA</a><br><br>
     <a href="dosen.php" style="text-decoration:none; color:white;">DAFTAR DOSEN</a><br><br>
     <div class="panel panel-default" style="color:black">
     <a href="kelas.php" style="text-decoration:none; color:black;">DAFTAR KELAS</a></div><br>
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
  <li class="active">Daftar Kelas UNUD</li>
</ol>
<!-- title -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <p style="font-size:23px;color:#000000;"><b></span> DAFTAR KELAS UNUD</b></p>
    <hr style="border:1px solid #000000;padding:0;margin:0px 0px 20px 0px;">
    </div>
</div>
<!-- Form -->
<div class="panel-body">
  <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
         <table class="fl-table" width="50%"><thead>
       <tr><th>NO</th><th>NAMA KELAS</th><th>NAMA DOSEN</th><th>JAM</th><th>KUOTA</th><th>STATUS</th><th>AKSI</th></tr></thead><tbody>

       <?php
       $email=$_SESSION['email'];
       $koneksi = mysqli_connect("localhost","root","","web") or die(mysqli_error());
      $sql1 = mysqli_query($koneksi, "SELECT * FROM kelas INNER JOIN dosen ON kelas.id_dsn = dosen.id_dsn");
       $row = mysqli_fetch_assoc($sql1);
      $no=1;
      foreach ($sql1 as $row){
        $id = $row['nama_kelas'];
        echo "<tr>
            <td>$no</td>
            <td>".$row['nama_kelas']."</td>
            <td>".$row['nama_dsn']."</td>
            <td>".$row['jam_kelas']."</td>
            <td>".$row['kuota_kelas']."</td>
            <td>".$row['status_kelas']."</td>
            <td><a href='../proses/gabung.php?id=$id'><input style='width:70px; height:25px; font-size: 10px; background-color: #324960;margin-left: 0px;' class='btn btn-md btn-success' value='Gabung'  ></a>
            <a href='../mahasiswa/kelas_lihat.php?id=$id'><input style='width:50px; height:25px; font-size: 10px; background-color: #4fc3a1;' class='btn btn-md btn-success' value='Lihat' ></td></a>";
        $no++;
      }
      ?>
    </tbody>
    </table>
      </div>
    </div>
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
            <?php $sql = mysqli_query($koneksi, "SELECT * FROM user_login WHERE email_user = '$email");
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