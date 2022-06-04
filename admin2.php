<?php   
session_start();
include "koneksi.php";
if (!isset($_SESSION["level"])) {
  header("Location:login.php");
  exit;
}
if ($_SESSION['level']=='user') {
  header("Location:index.php");
}
     $no=1;
     $dataptn=query("SELECT * FROM tb_tambahinformasi");
     if (isset($_POST["cari"])) {
     $dataptn= caridataptn($_POST["keyword"]);
      }

     $datauser=mysqli_query($koneksi,"SELECT * FROM tb_user");
      $jumlahdata=mysqli_num_rows($datauser);
      
      $dataptn=mysqli_query($koneksi,"SELECT * FROM tb_tambahinformasi");
      $jumlahdataptn=mysqli_num_rows($dataptn);

      $datapts=mysqli_query($koneksi,"SELECT * FROM tb_tambahinformasipts");
      $jumlahdatapts=mysqli_num_rows($datapts);

      $datakontak=mysqli_query($koneksi,"SELECT * FROM tb_kontak");
      $jumlahdatakontak=mysqli_num_rows($datakontak);
 ?>
    <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/admin1.css">
    <!-- gogle font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;1,100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <title>Dashboard PTS</title>
  </head>
  <body>
  
    
    <div class="container">
      <div class="row">
        <div class="col-md-3 kotak1 " >
          <h4 class="judulDashboard">MARI-<span style="color: orange;">KULIAH</span></h4>
          <i class="fas fa-tachometer-alt"><a href="admin1.php"> DASHBOARD</a></i><br>
          <i class="fas fa-tachometer-alt"><a href="admin2.php"> INFORMASI PTN</a></i><br>
          <i class="fas fa-tachometer-alt"><a href="admin3.php"> INFORMASI PTS</a></i><br>
          <i class="fas fa-tachometer-alt"><a href="admin5.php"> KOMENTAR PTN</a></i><br>
          <i class="fas fa-tachometer-alt"><a href="admin6.php"> KOMENTAR PTS</a></i><br>
          <i class="fas fa-tachometer-alt"><a href="admin4.php"> DAFTAR SARAN</a></i><br>
          <br>
           <p class="logout"><i class="fas fa-sign-out-alt" style="color: white"></i>
            <a href="logout.php" > Logout</a></p>
          


        </div>
        <div class="col kotak2">
          <nav aria-label="breadcrumb" >
            <ol class="breadcrumb dash" style="background-color: #f2f2f2">
              <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
            <div class=" ko1">
              <div class="ko1dalam">
                <i class="fas fa-users"></i>
              </div>
              <hr class="hrnih">
              <p class="isiKo">Total User Dalam Web Kami <?php echo "$jumlahdata"; ?> </p>
            </div>
            <div class=" ko2">
              <div class="ko1dalam" style="background-color: blue;">
                <i class="fas fa-book-open"></i>
              </div>
              <hr class="hrnih">
              <p class="isiKo">Informasi PTN <?php echo "$jumlahdataptn"; ?></p>
            </div>
            <div class=" ko3">
              <div class="ko1dalam" style="background-color: green;">
                <i class="fas fa-university"></i>
              </div>
              <hr class="hrnih">
              <p class="isiKo">Informasi PTS <?php echo "$jumlahdatapts"; ?></p>
            </div>
            <div class=" ko4">
              <div class="ko1dalam" style="background-color: yellow;">
                <i class="fas fa-id-card-alt"></i>
              </div>
              <hr class="hrnih">
              <p class="isiKo">Total Keluhan User Di Web Kami <?php echo "$jumlahdatakontak"; ?></p>
            </div>
        
        

        <div class="kotak3">
          <div class="judultabel"></div>
          <form action="" method="POST" >
                    <input type="text" name="keyword" placeholder="CARI INFORMASI"  autocomplete="off" >
                    <button type="submit" name="cari">Search</button>
                </form>
          <br><br>
          <table class="table table-bordered" width="200px">
            <thead>
              <tr>
                 <th scope="col">no</th>
                <th scope="col">Id</th>
                <th scope="col">Foto Universitas</th>
                <th scope="col">Nama Universitas</th>
                <th scope="col" class="isi-univth">Isi Universitas</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          
             <?php  foreach ($dataptn as $ptn ) : ?>
              <tr>
                <th><?php echo $no++ ?></th>
                <td><?php echo $ptn['id']; ?></td>
                <td> <div class="dashboard-foto" style="background-image: url('img/<?php echo $ptn['fotouniversitas']; ?>');"></div></td>
                <td ><?php echo $ptn['namauniversitas']; ?></td>
                <td class="isi-univ"  style="" ><?php echo $ptn['isiuniversitas']; ?></td>
                <td><a href="deleteadminptn.php?id=<?php echo $ptn['id'] ?>" class="btn btn-danger" onclick= "return confirm('anda yakin min?')">delete</a></td>
              </tr>
            <?php endforeach; ?>
            </table>
        </div>
          
        </div>
      </div>
     
    </div>
     
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>