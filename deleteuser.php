<?php 
session_start();
include "koneksi.php";

$id_profil=$_GET["id_profil"];

if (hapusdatauser($id_profil)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='admin1.php';
        </script>";
}else{
	echo "<script>
            alert('data gagal dihapus');
            
        </script>";
}

 ?>