<?php include("baglan.php"); ?>
<form action="ekle.php" method="post">
	<input type="text" name="fbaslik">
	<input type="text" name="fdetay">
	<button type="submit">ekle</button>
</form>
<?php
if($_POST){
	$gbaslik = $_POST["fbaslik"];
	$gdetay  = $_POST["fdetay"];
	$ekle	 = mysqli_query($baglan,"insert into yapilacak_listesi (baslik, detay) values ('$gbaslik', '$gdetay')");
	if($ekle){
		echo "ekledin";
		header("Location:goruntule.php");
	}else{
		echo "hatalı";
		die();
	}
}
?>
<?php mysqli_close($baglan); ?>