<?php 
session_start();
include "koneksi.php";
$id = $_GET["id"];
if (hapusDataAdminPts($id)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='admin3.php';
        </script>";
}else{
	echo "<script>
            alert('Data Gagal Dihapus');
            
        </script>";
}
 ?>