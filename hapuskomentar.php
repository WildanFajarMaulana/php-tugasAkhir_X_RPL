<?php 
session_start();
include "koneksi.php";

$id_komentar=$_GET["id_komentar"];
$id_link=$_GET["id_link"];
if (hapuskomentar($id_komentar)>0) {
	echo "<script>
            
            document.location.href='./isiinformasipts.php?id_informasi=$id_link';
        </script>";
     	
}else{
	echo "<script>
            
        </script>";
       
}

 ?>