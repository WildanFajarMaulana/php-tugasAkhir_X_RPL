<?php 
include "koneksi.php";
	$username = $_POST['username'];	
	$password = $_POST['password'];
	$password2 = $_POST['password2'];
	$level = "user";
	
	$query1="SELECT max(id) as idmax FROM tb_user ";
	$hasil1=mysqli_query($koneksi,$query1);
	$datalog=mysqli_fetch_assoc($hasil1);
	$id=$datalog["idmax"];
	$id++;

	

	$newid=sprintf("%3s",$id);
		
	
	// $id=1;
	// for($id)
	// $id+=1;
	// $id++;
	

		
	
	


	if ($password == $password2) {
		

		$pengacak = "p3ng4c4k";

		$passmd = md5($pengacak . md5($password));
		
		$query = "INSERT INTO tb_user VALUES ('$newid','$username','$passmd','$level')";
		$hasil = mysqli_query($koneksi,$query);
		if ($hasil) {
			@$query="SELECT * FROM tb_user WHERE username='$username'";
			@$data=mysqli_query($query);
			@$hasil=mysqli_fetch_assoc($data);
			@$_SESSION["id"]=$hasil["id"];
				
			echo "<script type='text/javascript'>
					 alert('akun berhasil terdaftar');
					 document.location.href='login.php';
					</script>";


		}
		else {
			echo "<script type='text/javascript'>
					 alert('username sudah ada yang memiliki');
					 document.location.href='daftar.php';
					</script>";
		}
		
	}
	else{
		echo "<script type='text/javascript'>
					 alert('password yang anda masukkan tidak sama');
					 document.location.href='daftar.php';
					</script>";
	}
	

 ?>