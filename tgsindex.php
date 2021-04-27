<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<!--Menampilkan teks dengan format heading 2-->
	<h2 align="center">Login Disini untuk Mendapatkan Hak Akses</h2>
	
	<!--Membuat Form Menggunakan Method POST dan memanggil file action-->
	<form method="POST" action="tgslogin.php">
		<!--Tag pembuat tabel untuk field inputan dan button login-->
		<table align="center">
		<tr>
			<td>Username</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<!--Button simpan untuk login/masuk-->
			<td><button type="submit" name="Login">Login</button></td>
		</tr>
		</table>
	</form>
	
</body>
</html>