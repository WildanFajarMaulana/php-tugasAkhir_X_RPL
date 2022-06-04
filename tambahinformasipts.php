<?php 
session_start();
include "koneksi.php";

  if (!isset($_SESSION["level"])) {
              header("Location:login.php");
      }
  if (isset($_SESSION['level'])  &&   isset($_SESSION['username'])) {
    if ($_SESSION['level'] == "user") {
      
      
    }
    else if ($_SESSION['level'] == "admin") {
      header("location:index.php");
    }
  }
  
  // tambah data / isi profil user
  @$id=$_SESSION["id"];
  $query="SELECT * FROM tb_datauser WHERE id_profil='$id'";
  $cari=mysqli_query($koneksi,$query);
  $data=mysqli_fetch_assoc($cari);
  $_SESSION["nama"]=$data["nama"];
  $_SESSION["profesi"]=$data["profesi"];
  $_SESSION["fotoprofil"]=$data["fotoprofil"];

  
  $id=$_SESSION["id"];
  $nama=$_SESSION["nama"];
  $profesi=$_SESSION["profesi"];
  $fotoprofil=$_SESSION["fotoprofil"];
  if (isset($_POST["konfirmasi"])) {
    if (tambahinformasipts($_POST,$id,$nama,$profesi,$fotoprofil)>0) {
     
       echo "<script>
        alert('Data Berhasil di Tambahkan');
        document.location.href='infopts.php';
      </script>";
    }else{
    echo "<script>
        alert('Data Gagal Ditambahkan ');
      </script>";
  }
  }
  $query="SELECT * FROM tb_datauser WHERE id_profil='$id'";
  $cari=mysqli_query($koneksi,$query);
  $data=mysqli_fetch_assoc($cari);
 
   ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/tambahinformasi.css">
    <!-- Gogle font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
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
    <title>TAMBAH INFORMASI PTS</title>
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
            <h3 class="h3info">ADD INFORMASI PTS</h3>
            <hr class="hrbaru">
          
        </div>
    </div><br>
    <!-- akhir jumbroton -->
    <div class="container">
        <div class="row">
            <div class="col">
                <form method="post" action="" enctype="multipart/form-data" autocomplete="off">
                    <center>
                        <section>
                            <h3 class="h3log">MARI-KULIAH</h3>
                            <h4 class="h4log">ISI INFORMASI</h4>
                            <hr class="hayukhr">
                            <br>
                            <input type="hidden" name="id_informasi">
                            <img src="img/<?php echo $data['fotoprofil'];?>" class="rounded-circle foto"><br>
                            
                            <input type="hidden" name="nama" placeholder="nama" value="<?php echo $_SESSION['username']; ?>" readonly>
                            
                            <input type="hidden" name="profesi" placeholder="profesi" value="<?php echo $data['profesi']; ?>" readonly>
                            

                            <label class="label-input">Foto Universitas</label><br>
                            <input type="file" name="fotouniversitas" placeholder="fotouniversitas" required=""><br>
                            <p class="p-foto">*maximal ukuran foto 1mb</p>
                              <div class="input-box"> 
                                <input id="myInput" type="text" class="input-complete" name="namauniversitas" required="" autocomplete="off">
                                <label >Nama Universitas</label>
                            </div>
                            <div class="input-box">
                               <textarea name="isiuniversitas"  required=""></textarea>
                               <label>Informasi Universitas. . . . . </label>
                            </div>
                           
                            <button class="kerenboy" type="submit" name="konfirmasi">KONFIRMASI</button>
                        </section>
                    </center>
                </form>
            </div>
        </div>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/infoptn.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init({
        once:"true",
        offset:300,
        
      });
    </script>
   
</body>

</html>