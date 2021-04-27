<!--Deklarasi Script PHP-->
<?php
	//Script untuk menghapus session
    session_start();
    $_SESSION['username'] = '';
    unset($_SESSION['username']);
    session_unset();
    session_destroy();
   
   	//Untuk mengalihkan ke halaman tgsindex.php
    header("Location: tgsindex.php");
?>
