<?php include("baglan.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Yapılacak Listesi</title>
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
	<div class="tema mini-modal">
		<div class="hero">
		<h2>Ekle</h2>
	</div>
<form action="ekle.php" method="post">
	<input type="text" name="fbaslik">
	<input type="text" name="fdetay">
	<button class="buton" type="submit">ekle</button>
</form>
</div>
</body>
</html>
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
