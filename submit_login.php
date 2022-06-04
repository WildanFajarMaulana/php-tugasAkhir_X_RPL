<?php 
	session_start();
	include "koneksi.php";
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM tb_user WHERE username='$username' ";
	$hasil = mysqli_query($koneksi,$query);
	$data = mysqli_fetch_assoc($hasil);

	$pengacak = "p3ng4c4k";

	$passmd = md5($pengacak . md5($password));

	if ($passmd == @$data['password']) {
		$_SESSION['id'] = $data['id'];
		$_SESSION['level'] = $data ['level'];
		$_SESSION['username'] = $data ['username'];
		@$_SESSION["nama"]=$data["nama"];
		@$_SESSION["profesi"]=$data["profesi"];
		@$_SESSION["fotoprofil"]=$data["fotoprofil"];

		echo "<script type='text/javascript'>
					 alert('Login Sukses');
					 document.location.href='tambahprofil.php';
					</script>";
	}
	else {
		echo "<script type='text/javascript'>
					 alert('Username/Password Salah');
					 document.location.href='login.php';
					</script>";
	}
 ?>