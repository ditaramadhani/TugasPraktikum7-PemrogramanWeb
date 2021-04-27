<!--Deklarasi Script PHP-->
<?php
	//Logika selection untuk mengecek apakah session sudah diinisalisasi
    	if (!isset($_SESSION['username'])){
    		header("Location: tgsindex.php");
    	}
?>