            <?php
            session_start();
            $koneksi = mysqli_connect("localhost","root","","web") or die(mysqli_error());
            $id = $_GET['id'];
            $email=$_SESSION['email'];
            $sql = mysqli_query($koneksi, "SELECT * FROM user_login INNER JOIN mahasiswa ON user_login.email_user = mahasiswa.email_mhs  WHERE email_user = '$email'");
            $row = mysqli_fetch_assoc($sql);
            $mhs = $row['id_mhs'];
            $sql1 = mysqli_query($koneksi, "SELECT * FROM kelas WHERE nama_kelas = '$id'");
            $row1 = mysqli_fetch_array($sql1);
            $kelas = $row1['id_kelas'];
            $sql2 = "INSERT INTO gabung (id_mhs, id_kelas) VALUES ('$mhs', '$kelas')";
      $simpan = mysqli_query($koneksi, $sql2);
      if($simpan){
          echo '<script language="javascript">alert("BERHASIL GABUNG KELAS");document.location="../mahasiswa/kelas.php";</script>';
        }
        else{
          echo '<script language="javascript">alert("GAGAL GABUNG KELAS");</script>';
        }
