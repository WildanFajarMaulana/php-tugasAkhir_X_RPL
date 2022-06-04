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

  @$_SESSION["profesi"]=$data["profesi"];
  @$_SESSION["fotoprofil"]=$data["fotoprofil"];

@$_SESSION["username"]=$data["nama"];
 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">     
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- font gogle-->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <!-- library aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>MARI-KULIAH</title>
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
        <div class="container" data-aos="zoom-in-down" data-aos-duration="1000"><br>
            <h1 class="display-4" >SEIAMAT DATANG<br></h1> <span style="font-family:'Aquirebiasa';" >Web Sederhana Dengan Informasi Berguna</span>
            <br><br>
            <a href="informasi.php"><button class="btn btn-dark">Kunjungi</button></a>
        </div>
    </div><br>
    <!-- akhir jumbroton -->
    <!-- tentang web -->
    <div class="container">
        <div class="row">   
        <div class="col" data-aos="fade-up" data-aos-duration="400">
            <h5 class="product">KULIAH YUK</h5>
            <h4 class="isinya">TENTANG KAMI</h4>
            <hr style="border-color:orange; width:18%;">
        </div>
        </div>
        <div class="row justify-content-center text-center">
            <div class="col-md-4 book1" data-aos="fade-up" data-aos-duration="200">
                <img src="img/book.png" width="30%;" alt="" style="">
                <h4 class="h4bre">INFORMASI PTN</h4>
                <p>Berisi Informasi PTN Kemudian user juga bisa menambahkan informasi</p>
            </div>
            <div class="col-md-4 book1" data-aos="fade-up" data-aos-duration="500">
                <img src="img/book.png" width="30%;" alt="" style="">
                <h4 class="h4bre">INFORMASI PTS</h4>
                <p>Berisi Informasi PTS Kemudian user juga bisa menambahkan informasi</p>
            </div>
        </div>
    </div>
    <!-- akhir tentang -->


    <br><br>
    <div class="jumbotron jumbotron-fluid parallax" data-aos="zoom-in" data-aos-duration="800">
        <div class="container" >
            <h1 class="display-3">PELAJAR PINTAR<br><span>DIMULAI DARI SEKARANG</span></h1>
        </div>
    </div>

    <!-- font keren -->
    <div class="container">
        <div class="row justify-content-center ">
            <div class="col-md-12 infoku">
                <div class="row text-center justify-content-center">
                    <div class="col-md font1" data-aos="fade-up"  data-aos-duration="460">>
                        <img src="img/font1.png" width="30%;" alt="font1" style="">
                        <h4>Hadir Tahun 2020</h4>
                        <p>Dengan Sistem Keren</p>
                    </div>
                    <div class="col-md font1" data-aos="fade-up" data-aos-duration="600">
                        <img src="img/font2.png" width="30%;" alt="font2">
                        <h4>Sistem Konsultasi</h4>
                        <p>Membantu User </p>
                    </div>
                    <div class="col-md font1" data-aos="fade-up"  data-aos-duration="800">
                        <img src="img/font4.png" width="30%;" alt="font4">
                        <h4>Informasi</h4>
                        <p>PTN & PTS</p>
                    </div>
                    <div class="col-md font1" data-aos="fade-up"  data-aos-duration="900">>
                        <img src="img/font3.png" width="30%;" alt="font3">
                        <h4>Sistem User-Admin</h4>
                        <p>Dapat Menerima Masukan</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md" data-aos="fade-up" data-aos-duration="400">
                <br><br>
                <h5 class="product1">KULIAH YUK</h5>
                <h4 class="isinya">DIREKTUR KAMI</h4>
                <hr style="border-color:orange; width:18%;">
            </div>
        </div>
        <div class="row text-center" data-aos="fade-up"
      data-aos-duration="680">
            <div class="col-md-6" data-aos="" >
                <img src="img/profilwebsite.jpg" class="img-fluid rubys">
            </div>
            <div class="col-md-6 direktur2" data-aos="">
                <h6 class="h6direktur">PROFIL</h6>
                <h3 class="h3direktur">Kenapa Saya Membuat Web Ini?</h3>
                <p class="pdirektur">"Saya membuat web ini agar para remaja di masa sekarang dapat menentukan pilihan sesuai minat dan bakatnya."</p>
                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                <p class="pdirek">Lee Ruby ~ <span style="color: skyblue;"> Direktur </span></p>
            </div>
        </div>
    </div><br><br><br>



    <!-- font keren -->
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
    <!-- isi -->

    <!-- akhir isi -->
    <!-- footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <!-- library aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once:"true",
        offset:300,
        
      });
    </script>
    </body>

</html>