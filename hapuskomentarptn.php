<?php 
session_start();
include "koneksi.php";

$id_komentar=$_GET["id_komentar"];
$id_link=$_GET["id_link"];
if (hapuskomentarptn($id_komentar)>0) {
	echo "<script>
            
            document.location.href='./isiinformasi.php?id_informasi=$id_link';
        </script>";
     	
}else{
	echo "<script>
            
        </script>";
       
}

 ?>