<?php 
session_start();
include "koneksi.php";
$id_informasi=$_GET["id_informasi"];
 $query=query("SELECT * FROM tb_tambahinformasipts where id_informasi='$id_informasi'");

@$id=$_SESSION["id"];
@$nama=$_SESSION["nama"];
$fotoprofil=$_SESSION["fotoprofil"];
$tanggal = date('Y-m-d H:i:s');
$id_link=$_GET["id_informasi"];
 if (isset($_POST["submit"])) {
    if (tambahkomentar($_POST,$id,$id_link,$nama,$tanggal,$fotoprofil)>0) {
     header("Location:./isiinformasipts.php?id_informasi=$id_link");
       
    }else{
  
  }
  }

$datakomen=query("SELECT * FROM tb_komentar WHERE id_link='$id_link' ORDER BY id_komentar ASC");
 ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="css/isi.css">
    <title>INFORMASI PTS</title>
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
   
    <!-- <a class="navbar-brand " href="infoptn.php">Kembali</a> -->
    <div class="containera">
        <center>   
        <?php foreach ($query as $data ) : ?>
        <div class="row">
            <div class="col text-centerx">
                   <div class="col nama-univ"><?php  echo $data["namauniversitas"] ?></div>
                <div class="foto">
                    <img src="img/<?php  echo $data["fotouniversitas"] ?>">
                </div>
            </div>
        </div>
        <div class=" kotak">   
          
            <p class="informasi-univ"><?php  echo $data["isiuniversitas"] ?></p> 
        </div>
         <?php endforeach; ?>
          <h3 class="h3-komentar">KOMENTAR </h3>
          <?php  if (!isset($_SESSION["level"])) { ?>
               <div class="container"> <br>    
                <?php   foreach ($datakomen as $komentar) : ?>
                    <div class="row">
                        <div class="col" >   
                            <img src="img/<?php echo $komentar['fotoprofil']; ?> " class="rounded-circle fotoprofil" >
                            <h5 class="nama-komentar"><?php echo $komentar['nama']; ?></h5>
                            <p class="p-komentar"><?php echo $komentar['komentar']; ?> </p>
                            <p class="p-tanggal"> <?php echo $komentar['tanggal']; ?></p>
                        </div>
                    </div>
                <?php   endforeach; ?>

            </div>  
          <?php }else{ ?>
            <form method="post"> 
                 <div class="form-group">
                   <input type="hidden" name="id_link" value="<?php echo $id_link; ?>"  >
                    <input type="text" class="form-control komentar" id="formGroupExampleInput" name="komentar" placeholder="Example input placeholder" required="" autofocus="on">
                  </div>
                <button type="submit" name="submit" ><i class="far fa-paper-plane"></i></button>
             </form><br>    
            <div class="container"> <br>    
                <?php   foreach ($datakomen as $komentar) : ?>
                    <div class="row">
                        <div class="col" >   
                            <img src="img/<?php echo $komentar['fotoprofil']; ?> " class="rounded-circle fotoprofil" >
                            <?php   if($komentar["id"]==$id){ ?>
                            <a href="hapuskomentar.php?id_komentar=<?php    echo $komentar['id_komentar']; ?>&id_link=<?php echo $komentar['id_link']; ?> "  onclick="return confirm('Anda Yakin Ingin Menghapusnya?');"><i class="fas fa-trash"></i></a>
                        <?php   }else{
                            
                        } ?>
                            <h5 class="nama-komentar"><?php echo $komentar['nama']; ?></h5>
                            <p class="p-komentar"><?php echo $komentar['komentar']; ?> </p>
                            <p class="p-tanggal"> <?php echo $komentar['tanggal']; ?></p>
                        </div>
                    </div>
                <?php   endforeach; ?>

            </div>  
            
             
        <?php } ?>
             
             
          </center>

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
    <script type="" src="js/kontak.js"  ></script>
  </body>
</html>