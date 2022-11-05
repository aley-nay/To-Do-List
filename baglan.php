<?php
$kuladi  = "root";
$kulsif  = "";
$hostadi = "localhost";
$vetadi  = "yapilacak_listesi";
$baglan  = mysqli_connect($hostadi,$kuladi,$kulsif,$vetadi);
mysqli_set_charset($baglan,"UTF-8");
if(mysqli_connect_errno()){
	echo "hata".mysqli_connect_error();
	die();
}
?>