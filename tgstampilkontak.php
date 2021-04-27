<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Deklarasi Script PHP-->
	<?php
	//Script untuk memanggil session dan mengeksekusi file action ceksession.php
    	session_start();
    	include "ceksession.php";
	?>
	<!--Menampilkan teks dengan format heading 2-->
	<h2>LIST MAHASISWA</h2>
	
	<!--Tag pembuat tabel untuk menampilkan data dari database-->
	<table border="1">
		<tr>
			<td>NO</td>
			<td>NIM</td>
			<td>NAMA</td>
			<td>JENIS KELAMIN</td>
			<td>EMAIL</td>
			<td>ALAMAT</td>
			<td>KOTA</td>
			<td>PESAN</td>
		</tr>

		<!--Deklarasi Script PHP-->
		<?php
			//Script memanggil file koneksi 
			include "tgskoneksi.php";
			
			//Script untuk menjalankan query pada database
			$sql="SELECT * from mhs";
			$mahasiswa=mysqli_query($conn,$sql);
			$no=1;
			
			//Untuk menampilkan/menuliskan data hasil query dari database ke tabel
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jkel']=='P'?'PEREMPUAN':'Laki-Laki';
				echo "<tr>
				<td>$no</td>
				<td>".$row['id']."</td>
				<td>".$row['nama']."</td>
				<td>".$jenis_kelamin."</td>
				<td>".$row['email']."</td>
				<td>".$row['alamat']."</td>
				<td>".$row['kota']."</td>
				<td>".$row['pesan']."</td>
				</tr>";
				$no++;
			}
		?>
	</table>
	
	<!--Tag pembuat tombol button untuk menampilkan form input-->
	<button><a href="tgstambahkontak.php">Tambah Data</a></button>
	<!--Tag pembuat tombol button untuk keluar dari akun-->
	<button><a href="tgslogout.php">Keluar</a></button>
</body>
</html>