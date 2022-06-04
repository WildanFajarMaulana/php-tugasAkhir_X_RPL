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
@$_SESSION["nama"]=$data["nama"];
@$_SESSION["profesi"]=$data["profesi"];
@$_SESSION["fotoprofil"]=$data["fotoprofil"];
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/info.css">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>

    <title>Informasi Kami</title>
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
        <div class="container" data-aos="zoom-in-down" data-aos-duration="1000"><br><br>
            <h1 class="display-4">CARI INFORMASIMU SEKARANG<br></h1> <span>Berbagai Informasi Gratis Maupun Berbayar</span>
            <hr style="border-color:orange; width:20%;">
        </div>
    </div><br>
    <!-- akhir jumbroton -->

    <div class="container text-center">
        <div class="row">
            <div class="col-md" data-aos="fade-up" data-aos-duration="400">
                <br><br>
                <h5 class="product">KULIAH YUK</h5>
                <h4 class="isinya">INFORMASI KAMI</h4>
                <hr style="border-color:orange; width:22%;">
            </div>
        </div>
        <div class="row" data-aos="fade-up"
      data-aos-duration="600">
            <div class="col-md-6">
                <div class="box1">
                    <h3 class="h3info">INFORMASI PTN</h3>
                    <hr style="border-color:orange; width:15%;">
                    <img src="img/grad1new.png" class="gradnew">
                    <h5 class="h5info">Perguruan Tinggi Nasional</h5>
                    <a href="infoptn.php"><button type="button" class="btn ">Selengkapnya</button>
                        </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="box2">
                    <h3 class="h3info">INFORMASI PTS</h3>
                    <hr style="border-color:orange; width:15%;">
                    <img src="img/grad1new.png" class="gradnew">
                    <h5 class="h5info">Perguruan Tinggi Swasta</h5>
                   <a href="infopts.php"><button type="button" class="btn ">Selengkapnya</button>
                        </a>
                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/info.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once:"true",
        offset:300,
        
      });
    </script>
</body>

</html>