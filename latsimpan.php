<!--Deklarasi Script PHP-->
<?php 
	//Script memanggil file koneksi 
	include "latkoneksi.php";
	
	//Script untuk menyimpan data ke dalam variabel
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jurusan=$_POST['jurusan'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$alamat=$_POST['alamat'];
	
	//Script query untuk insert/menyimpan data di db
	$query="INSERT INTO mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', jenis_kelamin='$jenis_kelamin' ,alamat='$alamat'";
	mysqli_query($conn,$query);
	//Untuk mengalihkan ke halaman latindex.php
	header("location:latindex.php");
?>
