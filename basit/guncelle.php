<?php
include("baglan.php");
$gid= $_GET["id"];
echo $gid;

$sorgu = mysqli_query($baglan,"select * from yapilacak_listesi where id=".$gid);
	if($sorgu){
		$kayitsayisi = mysqli_num_rows($sorgu);
		if($kayitsayisi>0){
			while($kayit = mysqli_fetch_assoc($sorgu)){
				echo "çalıştı";				
?>

				<form action='guncelle.php?id=<?php echo $gid;?>' method='post'>
					<input type='text' name='fbaslik' value='<?php echo $kayit["baslik"];?>'>
					<input type='text' name='fdetay'  value='<?php echo $kayit["detay"];?>'>
					<button type='submit'>güncelle</button>
				</form>
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
