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

// cek apakah tombol submiy sudah ditekan apa belum
if (isset($_POST["submit"])) {
        // cek apa data berhasil ditambahkan
   if (ubah($_POST,$id)>0) {
       echo "<script>
            alert('data berhasil diubah');
            document.location.href='profil.php';
        </script>";
   }

    else{
        echo "<script>
            alert('data gagal diubah');
            document.location.href='editprofil.php';
        </script>";
    }
}

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
    <link rel="stylesheet" type="text/css" href="css/editprofil.css">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Lalezar&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Alata&family=Open+Sans+Condensed:wght@300&family=Quicksand&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e133f65112.js" crossorigin="anonymous"></script>
    <title>Edit Profil</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="kotak">
                    <h4 class="h4coy">EDIT PROFIL</h4>
                    <form method="post" action="" enctype="multipart/form-data">
                        <center><img src="img/<?=  $data['fotoprofil'];?>" class="rounded-circle foto"></center><br>
                        <input type="hidden" name="fotolama" value="<?= $data["fotoprofil"]; ?>">
                        <label class="labels"><br>Edit Foto <span class="titikdua">:</span></label><input type="file" name="fotoprofil">
                        <p class="p-maxim">*maximal foto 1mb</p>
                        <label class="label">Nama <span class="titiksama">:</span></label><input type="text" name="nama"  value="<?=  $data['nama'];?>">
                        <hr class="hrprofil">
                        <label class="label">Profesi <span class="titikprofesi">:</span></label><input type="text" name="profesi"  value="<?=  $data['profesi'];?>">
                        <hr class="hrprofil">
                        <label class="label">Umur <span class="titiksama"> :</span>

                        </label>
                        <input type="text" name="umur"  value="<?=  $data['umur'];?>">
                        <hr class="hrprofil">
                        <label class="label">Alamat <span class="titikalamat">:</span></label><input type="text" name="alamat"  value="<?=  $data['alamat'];?>">
                        <hr class="hrprofil">
                        <label class="label">Kota <span class="titikkota">:</span></label><input type="text" name="kota"  value="<?=  $data['kota'];?>">
                        <hr class="hrprofil">
                        <a href="profil.php" class="btn btn-danger">CANCEL</a>
                        <button type="submit" name="submit" class="btn btn-warning">KONFIRMASI</button>
                    </form>
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
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/profil.js"></script>
</body>

</html>