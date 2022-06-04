<?php 
session_start();
include "koneksi.php";
$id = $_GET["id"];
if (hapusDataAdminKontak($id)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='admin4.php';
        </script>";
}else{
	echo "<script>
            alert('Data Gagal Dihapus');
            
        </script>";
}
 ?>