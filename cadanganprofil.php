<?php 
session_start();
include "koneksi.php";
if (!isset($_SESSION["level"])) {
  header("Location:login.php");
  exit;
}

$id=$_SESSION["id"];
$query="SELECT * FROM tb_datauser WHERE id_profil='$id'";
$cari=mysqli_query($koneksi,$query);
$data=mysqli_fetch_assoc($cari);

$_SESSION["username"]=$data["nama"];


$_SESSION["nama"]=$data["nama"];
$_SESSION["profesi"]=$data["profesi"];
$_SESSION["fotoprofil"]=$data["fotoprofil"];

$queryPTN = query("SELECT * FROM tb_tambahinformasi WHERE id='$id'");




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
    <link rel="stylesheet" type="text/css" href="css/profil.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <title>Profil</title>
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
                 <li class='nav-item dropdown'>
                  <a class='nav-link dropdown' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>";
              echo "HAI, " .$_SESSION["username"]=$data["nama"];;

              echo "<i class='fas fa-caret-down' style='margin-left: 10px;' ></i>
                  </a>
                  <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
                    <a class='dropdown-item' href='Profil.php'>Profil</a>
                    <div class='dropdown-divider'></div>
                    <a class='dropdown-item' href='Logout.php'>Logout</a>
                  </div>
                </li>";
              ?>


                </div>
            </div>
        </div>
    </nav>
    <!-- akhir navbar -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="kotak">
                    <h4 class="h4coy">PROFIL</h4>

                    <center><img src="img/<?php echo $data['fotoprofil'];?>" class="rounded-circle foto"></center>
                    <div class="data">

                        <h5 class="h5profil">Nama &nbsp; &nbsp;: </h5>
                        <p class="p1"><?= $data['nama']; ?></p>
                        <hr class="hrprofil">
                        <h5 class="h5profil">Profesi &nbsp;: </h5>
                        <p class="p1"><?= $data['profesi']; ?></p>
                        <hr class="hrprofil">
                        <h5 class="h5profil2">Umur &nbsp; &nbsp;: </h5>
                        <p class="p1"><?=  $data['umur'];?></p>
                        <hr class="hrprofil">
                        <h5 class="h5profil2">Alamat&nbsp;: </h5>
                        <p class="p1"><?=  $data['alamat'];?></p>
                        <hr class="hrprofil">
                        <h5 class="h5profil2">Kota &nbsp;&nbsp; &nbsp;: </h5>
                        <p class="p1"><?=  $data['kota'];?></p>
                        <hr class="hrprofil">

                    </div>
                    <center><a href="editprofil.php"><button type="button" class="btn btn-warning">Edit Profil</button></a></center>
                </div>
            </div>
            <div class="col">
                <div class="kotak2">
                    <div class="container">

                        <div class="row ">
                            <div class=" box1 ">
                                <center><img src="img/gr1.png" class="bo"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class="box2">
                                <center><img src="img/univ.png" class="bo"></center>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" box3">
                                <center><img src="img/book1.png" class="bo"></center>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="kotak3">
                <div class="row">
                    <div class="col ">
                         <a href="profil.php?page=dataptn" ><button class="judul-ptn-pts">Data Informasi PTN</button> </a>
                    </div>
                    <div class="col ">

                        <a href="profil.php?page=datapts" ><button class="judul-ptn-pts">Data Informasi PTS</button> </a>

                    </div>
                </div>?php if ($_GET['page']=='dataptn') { ?>
                              <img src="img/<?php echo $ptn['fotoprofil']; ?>" class="rounded-circle  fotopenulis">
                           <div class="dropdown">
                                <i class="fas fa-ellipsis-h"></i>
                                <div class="dropdown-content">
                                    <a href="editptn.php?id= <?php echo $ptn['id'];?> &id_ptn=<?php echo $ptn['id_ptn']; ?>" class="link-drop">Edit ptn</a>
                                    <div class="dropdown-divider"></div>
                                    <a href="hapusptn.php?id=<?php echo $inOformasi['id'];?>&id_ptn=<?php echo $ptn['id_ptn'];?> " class="link-drop"
                                    onclick="return confirm('Anda Yakin Ingin Menghapusnya?');"
                                    >Hapus Informasi</a>
                                </div>
                            </div>
                            <h5 class="hloginpenulis">&nbsp;&nbsp;&nbsp;<?php echo $ptn['nama']; ?></h5>
                            <p class="ppenulis">&nbsp;&nbsp;&nbsp;<?php echo  $ptn['profesi']; ?></p>
                             <div class="img-fluid bgfoto" style="background-image: url('img/<?php echo $ptn['fotouniversitas']; ?>');">
                                </div>
                            <i class="fas fa-university"></i><p class="puniv"><?php echo $ptn['namauniversitas']; ?></p>
                            <a href="isiinformasi.php?id_informasi=<?php echo $ptn['id_informasi'];?>" class="btn btn-warning"> Lihat</a>
                <?php foreach ($queryPTN as $ptn =): ?>
                <div class="row  mt-4">   
                    <div class=" kotak1">
                            <?php if ($_GET['page']=='dataptn') {
                            <img src="img/fb.png" class="rounded-circle  fotopenulis">";
                             <li class="nav-item dropdown">
                                
                                <a class=" dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ellipsis-h"></i>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                              </li>
                          
                            <h5 class=hloginpenulis>&nbsp;&nbsp;&nbsp;woda</h5>
                            <p class="ppenulis">&nbsp;&nbsp;&nbsp;direktur</p>
                            <div class="img-fluid bgfoto" style="background-image: url("img/font3.png");">
                                </div>
                            <i class="fas fa-university"></i><p class="puniv">brai</p>
                            <a href="isiinformasi.php" class="btn btn-warning"> Lihat</a>
                            
                            
                            }

                             ?>
                        
                        
                    </div>
                    
               
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
    <script type="text/javascript" src="js/profil.js"></script>
</body>

</html>