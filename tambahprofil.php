
<?php 
session_start();
include "koneksi.php";
$id=$_SESSION["id"];
  if (!isset($_SESSION["id"])) {
              header("Location:daftar.php");
      }
  if ($id=='1') {
    header("Location:index.php");
    exit();
  }
  if (isset($_SESSION['level'])  &&   isset($_SESSION['username'])) {
    if ($_SESSION['level'] == "user") {
      
      
    }
    else if ($_SESSION['level'] == "admin") {
      header("location:admin1.php");
    }
  }
  
  // tambah data / isi profil user
  if (isset($_POST ["konfirmasi"])) {
    if (tambahuser($_POST,$id)>=0) {
     
       echo "<script>
        alert('Data Berhasil di Tambahkan');
        document.location.href='profil.php';
      </script>";
    }
    else {
      echo "<script>
        alert('Data Gagal Ditambahkan Karena Anda Sudah Pernah Mengisi Data');
        document.location.href='tambahprofil.php';
      </script>";
    }
   

  }
  
  // $datauser=query("SELECT * FROM tb_datauser WHERE idprofil='$id'");
  // foreach ($datauser as $user ) {
  //   if($user["umur"]){
  //   header("Location:index.php");
  // }
  // else{

  // }
  // }
  

  
 
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
    <link rel="stylesheet" type="text/css" href="css/tambahprofil.css">
    <!-- Gogle font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <title>Hello, world!</title>
</head>

<body>
  <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" data-aos="zoom-in-down" data-aos-duration="1000"><br><br>
            <h3 class="h3info">TAMBAH PROFIL</h3>
            <hr class="hrbaru">
            
            </div>
            </center>
        </div>
    </div><br>
    <!-- akhir jumbroton -->
    <div class="container">
        <div class="row">
            <div class="col ">
               
                <form method="post" action="" enctype="multipart/form-data">
                    <center>
                         <div class="kotak-input">   
                            <h3 class="h3log">MARI-KULIAH</h3>
                            <h4 class="h4log">ISI PROFIL</h4>
                            <hr class="hayukhr">
                            <br>
                            <input type="hidden" name="id_profil">
                             
                           
                            <div class="input-box">
                                  <input type="text" name="nama"  required="">
                                <label>Nama</label>
                            </div>
                            <div class="input-box">
                                <input type="text" name="profesi" required="">
                                <label>Profesi</label>
                            </div>
                            <div class="input-box">
                                <input type="text" name="umur"  required="">
                                <label>Umur</label>
                            </div>
                            <div class="input-box">
                                <input type="text" name="alamat" required="">
                                <label>alamat</label>
                            </div>
                            <div class="input-box">
                                <input type="text" name="kota"  required="">
                                 <label>kota</label>
                            </div>

                             <input type="file" name="fotoprofil" required="" class="profil">
                              <p class="p-foto">*maximal ukuran foto 1mb</p>
                            
                            <button class="kerenboy" type="submit" name="konfirmasi">KONFIRMASI</button>
                        </div>      
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