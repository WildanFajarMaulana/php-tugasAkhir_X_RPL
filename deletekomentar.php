<?php 
session_start();
include "koneksi.php";

$id_komentar=$_GET["id_komentar"];

if (hapuskomentarptnadmin($id_komentar)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='admin5.php';
        </script>";
}else{
	echo "<script>
            alert('data gagal dihapus');
            
        </script>";
}

 ?>