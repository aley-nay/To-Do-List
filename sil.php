<?php include("baglan.php"); ?>

<?php
if($_GET){
	$gsil = $_GET["id"];
	$sil	 = mysqli_query($baglan,"delete from yapilacak_listesi where id='$gsil'");
	if($sil){
		echo "sildin";
		header("Location:goruntule.php");
	}else{
		echo "hatalı";
		die();
	}
}
?>
<?php mysqli_close($baglan); ?>