<?php   
session_start();
include "koneksi.php";
if (!isset($_SESSION["level"])) {
  header("Location:login.php");
  exit;
}
if ($_SESSION['level']=='user') {
  header("Location:index.php");
}else{

}
     $no=1;
     $data=query("SELECT * FROM tb_user");
     
     if (isset($_POST["cari"])) {
     $data= caridata($_POST["keyword"]);
      }
     $datauserweb=query("SELECT * FROM tb_datauser");
       if (isset($_POST["cari"])) {
     $datauserweb= caridatauserweb($_POST["keyword"]);
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
    <title>Dashboard user</title>
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
    
          <p class="logout"><i class="fas fa-sign-out-alt" style="color: white"></i><a href="logout.php" > Logout</a></p>
        

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
      <div class="flexbox" >
        <div class=" kayu">
          <p class="pepe" id="grafiks">
            <img src="img/beranda.png" class="foto-pepe">
            <h4 class="h4-tema">Landing Page Web Kami</h4>
            <p class="p-isi">Web gw ini broooooo</p>
            <i class="far fa-clock"> Update 2 Month Ago</i>
          </p>
        </div>
        <div class=" kayu2"><p class="pepe">
          <img src="img/infoptn.png" class="foto-pepe">
          <h4 class="h4-tema">Informasi PTN / PTS Web Kami</h4>
            <p class="p-isi">Web gw ini broooooo</p>
            <i class="far fa-clock"> Update 4 Month Ago</i>
        </p></div>
        <div class=" kayu3"><p class="pepe">
          <img src="img/kontak.png" class="foto-pepe">
          <h4 class="h4-tema">Kontak Web Kami</h4>
            <p class="p-isi">Web gw ini broooooo</p>
            <i class="far fa-clock"> Update 5 Month Ago</i>
        </p></div>
        </div>

        <div class="kotakdash">
          <div class="judultabel"></div>
          <form action="" method="POST" >
                    <input type="text" name="keyword" placeholder="CARI DATA"  autocomplete="off" >
                    <button type="submit" name="cari">Search</button>
                </form>
          <br><br>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          
             <?php  foreach ($data as $user ) : ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $user["id"]; ?></td>
                <td><?php echo $user["username"]; ?></td>
                <td><?php echo $user["password"]; ?></td>
                <td><?php echo $user["level"]; ?></td>
                <td><a href="deleteadmin.php?id=<?php echo $user['id'] ?>" class="btn btn-danger" onclick= "return confirm('anda yakin min?')">delete</a></td>
              </tr>
            <?php endforeach; ?>
            </table>
        </div>
             <div class="kotakdash">
          <div class="judultabel"></div>
          <form action="" method="POST" >
                    <input type="text" name="keyword" placeholder="CARI DATA"  autocomplete="off" >
                    <button type="submit" name="cari">Search</button>
                </form>
          <br><br>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th scope="col">no</th>
                <th scope="col">Id_profil</th>
                <th scope="col">fotoprofil</th>
                <th scope="col">nama</th>
                <th scope="col">profesi</th>
                <th scope="col">umur</th>
                <th scope="col">alamat</th>
                <th scope="col">kota</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
          
             <?php  foreach ($datauserweb as $userprofil ) : ?>
              <tr>
                <th scope="row"><?php echo $no++; ?></th>
                <td><?php echo $userprofil["id_profil"]; ?></td>
                <td class="dashboard-fotos" style="background-image: url('img/<?php echo $userprofil['fotoprofil']; ?>');"></td> 
                <td><?php echo $userprofil["nama"]; ?></td>
                <td><?php echo $userprofil["profesi"]; ?></td>
                <td><?php echo $userprofil["umur"]; ?></td>
                <td><?php echo $userprofil["alamat"]; ?></td>
                <td><?php echo $userprofil["kota"]; ?></td>
                <td><a href="deleteuser.php?id_profil=<?php echo $userprofil['id_profil'] ?>" class="btn btn-danger" onclick= "return confirm('anda yakin min?')">delete</a></td>
              </tr>
            <?php endforeach; ?>
            </table>
        </div>
          
        </div>
      </div>
     
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