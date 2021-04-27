<!--Deklarasi Script PHP-->
<?php
	//Script memanggil dan menjalankan file koneksi 
	include "tgskoneksi.php";
	
	//Script untuk menyimpan data ke dalam variabel
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$email=$_POST['email'];
	$alamat=$_POST['alamat'];
	$kota=$_POST['kota'];
	$pesan=$_POST['pesan'];
	
	//Script query untuk insert/menyimpan data di db
	$query="INSERT INTO mhs (id,nama,jkel,email,alamat,kota,pesan) VALUES ('$nim','$nama','$jenis_kelamin','$email','$alamat','$kota','$pesan')";
	mysqli_query($conn,$query);
	
	//menampilkan alert berupa teks pemberitahuan dan menampilkan form tampilkontak.php
	echo "<script>alert('Input Data Telah Berhasil!);</script>";
	//Untuk mengalihkan ke halaman tgstampilkontak.php
	header("location:tgstampilkontak.php");
?>