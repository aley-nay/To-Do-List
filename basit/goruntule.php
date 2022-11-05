<?php
include("baglan.php");
$sorgu = mysqli_query($baglan,"select * from yapilacak_listesi");
if($sorgu){
	$kayit_sayisi = mysqli_num_rows($sorgu);
	if($kayit_sayisi>0){
		while($kayit = mysqli_fetch_assoc($sorgu)){
			echo $kayit["baslik"]."<br>";
			echo $kayit["detay"]."<br>";
			echo "<a href='sil.php?id=".$kayit["id"]."'>sil</a> | <a href='guncelle.php?id=".$kayit["id"]."'>güncelle</a>";
			echo "<br><br><br>";
		}
	}
}
mysqli_close($baglan);
?>