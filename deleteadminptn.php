<?php 
session_start();
include "koneksi.php";
$id = $_GET["id"];
if (hapusDataAdminPtn($id)>0) {
	echo "<script>
            alert('data berhasil dihapus');
            document.location.href='admin2.php';
        </script>";
}else{
	echo "<script>
            alert('Data Gagal Dihapus');
            
        </script>";
}
 ?>