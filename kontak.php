<?php
session_start();
include "koneksi.php";
if (@$_SESSION['level']=='admin') {
    header("location:admin1.php");
}
@$id=$_SESSION["id"];
$query="SELECT * FROM tb_datauser WHERE id_profil='$id'";
$cari=mysqli_query($koneksi,$query);
$data=mysqli_fetch_assoc($cari);
if (isset($_POST["kirim"])) {
  

  if (tambahkontak($_POST)>0) {
    echo "<script>
        alert('saran dan masukkan berhasil dikirim');
        document.location.href='kontak.php';
      </script>";
  }else{
    echo "<script>
        alert('saran dan masukkan gagal dikirim');
        document.location.href='kontak.php';
      </script>";
  }
}

 ?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Kontak Kami</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/kontak.css">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="js/kontak.js">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-black">
        <div class="container">
            <a class="navbar-brand " href="index.php">MARI-<span style="color: orange">KULIAH</span></a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" id="isinavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <a class="nav-link active" href="index.php">Beranda <span class="sr-only">(current)</span></a>
                    <a class="nav-link " href="informasi.php">Informasi</a>
                    <a class="nav-link " href="kontak.php">Kontak</a>
                    <?php 
            if (!isset($_SESSION["level"])) {
                echo "<a href='login.php'><button class='kerenboy'>MASUK</button></a>";
            }
            else{
              echo "<li class='nav-item dropdown'>
                  <a class='nav-link dropdown' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
               echo "HAI, " .$_SESSION['username'];

              echo "<i class='fas fa-caret-down' style='margin-left: 10px;' ></i>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='Profil.php'>Profil</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='Logout.php'>Logout</a>
                  </div>
                </li>";
              }
             ?>


                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <!-- jumbroton -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container"  data-aos="zoom-in-down" data-aos-duration="1000"><br><br>
            <h1 class="display-4">KONTAK KAMI</h1>
            <p class="pjumbo">Beri Masukkan Kepada Kami</p>
            <hr style="border-color:orange; width:20%;">
        </div>
    </div>
    <!-- akhir jumbroton -->
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="kontakform" data-aos="fade-up" data-aos-duration="400">
                    <h3 class="h3ni">KULIAH YUK</h3>
                    <h4 class="h4ni">KONTAK</h4>
                    <hr class="garishr">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="kotak1 text-center">
                                <i class="fa fa-map-marker-alt fa-3x font-kontak"></i>
                                <h2 class="h2ni">Alamat</h2>
                                <p class="pni">Jl.Simpang Sulfat Selatan.INDONESIA</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="kotak2">

                                <div class="form-group">
                                    <form method="post" action="">
                                        <div class="form-row ">
                                            <div class="col inputan1">
                                                <input type="text" class="form-control" placeholder="Nama Anda" required="" name="nama" autocomplete="off">
                                            </div>
                                            <div class="col inputan2">
                                                <input type="email" class="form-control" placeholder="Email Anda" required="" name="email" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="col inputan3">
                                            <input type="text" class="form-control " placeholder="Subject" required="" name="subject" autocomplete="off">
                                        </div>
                                        <div class="col inputan4">
                                            <textarea class="form-control " id="validationTextarea" placeholder="Pesan" required="" name="saran" autocomplete="off" style="resize: none;"></textarea>
                                        </div>
                                        <center><button type="submit" name="kirim" class="btn btn-primary btbro">Kirim</button></center>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-4">
                            <div class="ko1 ">
                                <i class="fas fa-envelope fa-3x font-kontak" ></i>
                                
                                <h2 class="h2ni">Email</h2>
                                <p class="pni">wildandsp@gmail.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ko3">
                                <i class="fas fa-address-card fa-3x font-kontak"></i>
                                
                                <h2 class="h2ni">Pengembang</h2>
                                <p class="pni">WilM-kuliah</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="ko2">
                                <i class="fas fa-phone fa-3x font-kontak"></i>
                                
                                <h2 class="h2ni">Telepon</h2>
                                <p class="pni">088123438765</p>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
   <div class="divfooter"></div>
    <footer class="section-footer">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h5 class="h5-footer">MARI KULIAH, <span style="color: orange">MARI MERAIH</span></h5>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <i class="fab fa-instagram font-footer"></i>
                <i class="fab fa-whatsapp font-footer"></i>
                <i class="fab fa-facebook font-footer"></i>
                <i class="fab fa-github font-footer"></i>
                <i class="fab fa-invision font-footer"></i>
            </div>
        </div>
        <div class="row text-center">
            <div class="col">
                <p class="p-footer">copyright 2020 - Wildan Fajar</p>
            </div>
        </div>
    </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/kontak.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once:"true",
        offset:300,
        
      });
    </script>
</body>

</html>