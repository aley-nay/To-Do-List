<?php
include("baglan.php");
$gid= $_GET["id"];

$sorgu = mysqli_query($baglan,"select * from yapilacak_listesi where id=".$gid);
	if($sorgu){
		$kayitsayisi = mysqli_num_rows($sorgu);
		if($kayitsayisi>0){
			while($kayit = mysqli_fetch_assoc($sorgu)){
		
?>
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
		<h2>Güncelle</h2>
	</div>
	<form action='guncelle.php?id=<?php echo $gid;?>' method='post'>
		<input type='text' name='fbaslik' value='<?php echo $kayit["baslik"];?>'>
		<input type='text' name='fdetay'  value='<?php echo $kayit["detay"];?>'>
		<button class="buton" type='submit'>güncelle</button>
	</form>
</div>
</body>
</html>
<?php
			}
		}
	}

	if($_POST){
	$gbaslik = $_POST["fbaslik"];
	$gdetay  = $_POST["fdetay"];

	$guncelle	=	mysqli_query($baglan, "UPDATE yapilacak_listesi SET baslik='$gbaslik', detay='$gdetay' WHERE id=" . $gid);
		if($guncelle){
			echo "güncellendi<br />";
			header("Location:goruntule.php");
		}else{
			echo "hata";
			die();
		}
	}

mysqli_close($baglan);
?>
