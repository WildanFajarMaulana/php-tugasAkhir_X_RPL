<?php 
session_start();
include "koneksi.php";

  if (!isset($_SESSION["level"])) {
               header("Location:login.php");
       }
  
  
  // tambah data / isi profil user
  $id=$_SESSION["id"];
   $query="SELECT * FROM tb_datauser WHERE id_profil='$id'";
  $cari=mysqli_query($koneksi,$query);
  $data=mysqli_fetch_assoc($cari);
   $_SESSION["nama"]=$data["nama"];
  $_SESSION["profesi"]=$data["profesi"];
  $_SESSION["fotoprofil"]=$data["fotoprofil"];
  
  $nama=$_SESSION["nama"];
  $profesi=$_SESSION["profesi"];
  $fotoprofil=$_SESSION["fotoprofil"];
  $id_informasi=$_GET["id_informasi"];
  if (isset($_POST["konfirmasi"])) {
    if (editinformasipts($_POST,$id,$nama,$profesi,$fotoprofil,$id_informasi)>0) {
     
       echo "<script>
        alert('Data Berhasil di ubah');
        document.location.href='infopts.php';
      </script>";
    }else{
    echo "<script>
        alert('Data Gagal Diubah(pastikan kalian menghapus data kalian sendiri) ');
      </script>";
  }
  }
 
  

  
  $datame="SELECT * FROM tb_tambahinformasipts WHERE id_informasi='$id_informasi'";

  $cariwoe=mysqli_query($koneksi,$datame);
  $dataedit=mysqli_fetch_assoc($cariwoe);
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
    <link rel="stylesheet" type="text/css" href="css/editinformasi.css">
    <!-- Gogle font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
  <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" data-aos="zoom-in-down" data-aos-duration="1000"><br><br>
            <h3 class="h3info">EDIT INFORMASI PTS</h3>
            <hr class="hrbaru">
            
        </div>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col">
             
                <form method="post" action="" enctype="multipart/form-data">
                    <center>
                        <section>
                            <h3 class="h3log">MARI-KULIAH</h3>
                            <h4 class="h4log">EDIT INFORMASI PTS</h4>
                            <hr class="hayukhr">
                            <br>
                            <input type="hidden" name="id_informasi">
                            <img src="img/<?php echo $data['fotoprofil'];?>" class="rounded-circle foto"><br>
                            
                            <input type="hidden" name="nama" placeholder="nama" value="<?php echo $_SESSION['username']; ?>" readonly>
                            
                            <input type="hidden" name="profesi" placeholder="profesi" value="<?php echo $data['profesi']; ?>" readonly>
                            

                             
                           
                            <div class="img-fluid bgfoto" style="background-image: url('img/<?php echo $dataedit['fotouniversitas']; ?>');"></div>
                             <input type="hidden" name="fotouniversitaslama" value="<?= $dataedit["fotouniversitas"]; ?>">
                            <label>Foto Universitas</label> 
                            <input type="file" name="fotouniversitas" placeholder="fotouniversitas">
                            <p class="p-foto">*maximal ukuran foto 1mb</p> 
                            <label>Nama Universitas</label> 
                            <input type="text" class="namaisi-univ" name="namauniversitas" placeholder="nama universitas" value="<?php echo $dataedit['namauniversitas']; ?>">
                            <label>Foto Universitas</label> 
                            <textarea class="namaisi-univ" name="isiuniversitas" placeholder="isi informasi universitas"><?php echo $dataedit['isiuniversitas']; ?></textarea>
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
</body>

</html>