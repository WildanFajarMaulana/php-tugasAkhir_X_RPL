<?php 
session_start();
if (!isset($_SESSION["level"])) {
  header("Location:login.php");
  exit;
}
$_SESSION=[];
session_unset();
session_destroy();

echo "<script>
        alert('logout berhasil');
        document.location.href='index.php';
      </script>";
 ?>