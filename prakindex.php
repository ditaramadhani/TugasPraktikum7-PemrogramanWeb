<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<!--Menampilkan teks dengan format heading 2-->
	<h2>LIST MAHASISWA</h2>
	
	<!--Tag pembuat tabel-->
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
			include "prakkoneksi.php";
			
			//Script untuk menjalankan query di database
			$sql="SELECT * from mhs";
			$mahasiswa=mysqli_query($conn,$sql);
			$no=1;
			//Untuk menampilkan data
			foreach ($mahasiswa as $row) {
				$jenis_kelamin = $row['jkel']=='P'?'PEREMPUAN':'Laki Laki';
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
</body>
</html>
