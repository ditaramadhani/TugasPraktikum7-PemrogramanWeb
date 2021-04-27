<!--Deklarasi Script PHP-->
<?php
	//Script memanggil file koneksi 
	include "tgskoneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];

	//Script untuk menjalankan query ke database
	$sql="SELECT username,pass from login where username='$username' and pass='$password'";
	$login=mysqli_query($conn,$sql);

	//Logika selection untuk mengecek apakah username dan pass cocok/ditemukan
	if (mysqli_num_rows($login)>0) {
		//inisialisasi session
		session_start();
		$_SESSION['username'] = $username;
		header("location:tgstampilkontak.php");
	}else
	//Menampilkan teks pemberitahuan apabila username dan password tidak cocok/tidak ditemukan di database
	echo "<script>alert('Username atau Password Anda Salah!');history.go(-1);</script>";
	?>	