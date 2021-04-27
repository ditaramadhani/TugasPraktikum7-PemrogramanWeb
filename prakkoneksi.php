<!--Deklarasi Script PHP-->
<?php
	//deklarasi variabel untuk nama server, username, dan password
	$servername ="localhost";
	$username = "root";
	$password = "";
	$dbname = "latihan";

	//membuka koneksi ke database 
	$conn = mysqli_connect($servername,$username,$password,$dbname);
?>