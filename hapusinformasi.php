<?php 
session_start();
include "koneksi.php";
$id=$_SESSION["id"];
$id_informasi=$_GET["id_informasi"];

if (hapus($id,$id_informasi)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='infoptn.php';
        </script>";
}else{
	echo "<script>
            alert('Tolong Hapus Data Kalian Sendiri');
            document.location.href='infoptn.php';
        </script>";
}

 ?>