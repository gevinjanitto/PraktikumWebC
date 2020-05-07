<?php
    session_start();
    if(isset($_SESSION['level'])){
        if($_SESSION['level'] == NULL){
            header('Location: login.php');
        }
    }else{
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas CSS</title>
  <style>
    body {
      margin: 0;
      font-family: poppins;
      <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDFFC2;" : "background-color: #ffffff;"; ?>
    }
    .kiri {
      margin: 1%;
      width: 20%;
      border-radius: 150px 0px 0px 0px;
      <?php echo ($_SESSION['level']=='admin') ? "border-color: #FDB161;" : "border-color: #FFCC00;"; ?>
      border-style: solid;
      border-width: 3px;
      height: auto;
      float: left;
    }
    .logo {
      display: flex;
      align-content: center;
      margin-top: 20px;
    }
    .sub-kiri {
      text-align: center;
      color: #065279;
     <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDB161;" : "background-color: #FFCC00;"; ?>
   }
    .sub-kiri1 a {
      text-align: center;
      color:  #065279;
    }
    .kanan {
      <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDFFC2;" : "background-color: #ffffff;"; ?>
      margin: 1%;
      width: 75%;
      height: auto;
      float: left;
      border-radius: 0px 150px 0px 0px;
      border-color: #065279;
      border-style: solid;
      border-width: 3px;
    }
    .foto {
      clear: right;
      height: 300px;
      background-image: url(./image/cover.jpg);
      background-size: 100%;
      border-radius: 0px 150px 0px 0px;
    }
    .nav {
      width: 100%;
      height: 60px;
      <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDB161;" : "background-color: #FFCC00;"; ?>
    }
    .nav ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
    }
    .nav ul li {
      float: left;
    }
    li a {
      display: flex;
      color: #065279;
      text-align: center;
      margin-left:105px;
      text-decoration: none;
    }
    li a:hover {
      color:  #ffffff;
    }
    .isi {
      padding:0px 50px 50px 50px;
      text-align: justify;
    }
    .isi1 {
      height:320px;
      <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDB161;" : "background-color: #FFCC00;"; ?>
      padding:30px;
    }
    .pengajar {
      float: left;
      margin-left:20px ;
      width: 200px;
      <?php echo ($_SESSION['level']=='admin') ? "border-color: #FDB161;" : "border-color: #FFCC00;"; ?>
      border-style: solid;
      margin-bottom: 25px;
      border-width: 3px;
    }
    .container {
      text-align: center;
      padding: 10px 20px;
    }
    .garis {
      <?php echo ($_SESSION['level']=='admin') ? "border-bottom: 4px solid #FDB161;" : "border-bottom: 4px solid #FFCC00;"; ?>
    }
    .footer{
      text-align: center;
      clear: both;
      width: 100%;
      height: 50px;
      <?php echo ($_SESSION['level']=='admin') ? "background-color: #FDB161;" : "background-color: #FFCC00;"; ?>
      color: #065279;
      padding:10px;
    }
  </style>
</head>
</head>

<body>
  <div class="kiri">
    <div class="logo">
      <img style="margin-left: auto; margin-right: auto;" src="./image/logo.png" alt="Logo.png" height="150px" />
    </div>
    <div class="sub-kiri">
      <h3>ARTIKEL POPULER</h3>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>Desain Web</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>HTML</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>CSS</h4>
      </a>
    </div>
    <div class="sub-kiri1">
      <a href="#" style="text-decoration: none;">
        <h4>Lain-lain</h4>
      </a>
    </div>
  </div>
  <div class="kanan">
    <div class="foto"></div>
     <div class="nav">
      <ul>
        <li>
          <a href="index.php" style="text-decoration: none;">
            <h3>HOME</h3>
          </a>
        </li>
        <li>
          <a href="tentang.php" style="text-decoration: none;">
            <h3>TENTANG</h3>
          </a>
        </li>
        <li>
          <a href="pengajar.php" style="text-decoration: none;">
            <h3>PENGAJAR</h3>
          </a>
        </li>
        <li>
          <a href="kontak.php" style="text-decoration: none;">
            <h3>KONTAK</h3>
          </a>
        </li>
        <li>
          <a href="logout.php" style="text-decoration: none; color: #4978D6;">
            <h3>LOGOUT</h3>
          </a>
        </li>
      </ul>
    </div>
     <div class="isi">
            <h2>UNIVERSITAS UDAYANA</h1>
            <div class="garis"></div>
            <h4>Jl. Raya Kampus UNUD, Bukit Jimbaran, Kuta Selatan, Badung-Bali-803611</h4>
            <h4>Phone Number: +62 (361) 701954, 704845</h4>
            <h4>Fax: +62 (361) 701907</h4>
            <h4>Email: info@unud.ac.id</h4>
            <h2>PEMBUAT WEB</h2>
            <div class="garis"></div>
            <h4>Gevin Janitto</h4>
            <img style="width: 20px; float: left; margin-right: 20px;" src="./image/wa.png" alt="#">
            <h4>089686380483</h2>
            <img style="width: 20px; float: left; margin-right: 20px;" src="./image/email.png" alt="#">
            <h4>gevinjanitto@gmail.com</h4>
            <img style="width: 20px; float: left; margin-right: 20px;" src="./image/line.png" alt="#">
            <h4>@gevin_janitto</h4>
        </div>
  </div>
  <div class="footer">
    <b>@ Copyright 2020<br>Universitas Udayana</b>
  </div>
</body>
</html>