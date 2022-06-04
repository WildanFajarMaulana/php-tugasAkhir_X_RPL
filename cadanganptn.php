    <?php 
session_start();
include "koneksi.php";

 $query=query("SELECT * FROM tb_tambahinformasi");

 ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/ptn.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Gilda+Display&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <title>Informasi PTN</title>
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
        <div class="container"><br><br>
            <h3 class="h3info">INFORMASI PTN</h3>
            <hr class="hrbaru">
            <center>    
            <div class="box">
                <form>
                    <input type="text" name="" placeholder="CARI INFORMASI">
                    <button type="submit" name="">Search</button>
                </form>
            </div>
            </center>
        </div>
    </div><br>
    <!-- akhir jumbroton -->

    <div class="container">
        <div class="row justify-content-center">
            <?php 
             if (!isset($_SESSION["level"])) {

             }else{
                 echo ";<div class='col-md-3 kotak1 text-center'>
                <center><img src='img/uploadinformasi.png' class='rounded-circle uploadinformasi'></center>
                <h4 class='h4upload'>Upload Informasi</h4>
                <p class='ppenulis'>Upload informasi tentang PTN untuk menambah wawasan dan berbagi info. </p>
                <a href='tambahinformasi.php'><button type='button' class='btn oldwarning '>Upload Informasi</button></a>
                
            </div>";
             }
             ?>
            
           
             <?php foreach ($query as $informasi ) : ?>
            <div class="col-md-3 kotak1">
                    <img src="img/<?php echo $informasi['fotoprofil']; ?>" class="rounded-circle  fotopenulis">
                    <?php   
                        if (!isset($_SESSION["level"])) {
                           echo" <h5 class='h5penulis'>&nbsp;&nbsp;&nbsp;<?php echo '". $informasi['nama']."'; ?></h5>
                            <p class='ppenulis'>&nbsp;&nbsp;&nbsp;<?php echo '". $informasi['profesi']."'; ?></p>";
                        }else{
                         echo "   <div class='dropdown'>
                                    <i class='fas fa-ellipsis-h'></i>
                                    <div class='dropdown-content'>
                                        <a href='editinformasi.php?id=<?php echo '".$informasi['id']."'; ?>&id_informasi=<?php echo '".$informasi['id_informasi']."'; ?>' class='link-drop'>Edit Informasi</a>
                                        <div class='dropdown-divider'></div>
                                        <a href='hapusinformasi.php?id=<?php echo $informasi['id'];?>&id_informasi=<?php echo $informasi['id_informasi']; ?>' class='link-drop' onclick='return confirm('Anda Yakin Ingin Menghapusnya?')'>Hapus Informasi</a>
                                    </div>
                                </div>
                        <h5 class='hloginpenulis'>&nbsp;&nbsp;&nbsp;<?php echo '". $informasi['nama']."'; ?></h5>
                        <p class='ppenulis'>&nbsp;&nbsp;&nbsp;<?php echo '". $informasi['profesi']."'; ?></p>";
                    }
                     ?>
                  
                    <h5 class="h5penulis">&nbsp;&nbsp;&nbsp;<?php echo $informasi['nama']; ?></h5>
                    <p class="ppenulis">&nbsp;&nbsp;&nbsp;<?php echo $informasi['profesi']; ?></p>
                    <div class="img-fluid bgfoto" style="background-image: url('img/<?php echo $informasi['fotouniversitas']; ?>');"></div>
                    <i class="fas fa-university"></i><p class="puniv"><?php echo $informasi['namauniversitas']; ?></p>
                    <button type="button" class="btn btn-warning">Lihat</button>
                  
            </div>

              <?php endforeach; ?>
           
        </div>

    </div>
    <br><br>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/infoptn.js"></script>
</body>

</html>