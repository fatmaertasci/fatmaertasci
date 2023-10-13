<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Başlıksız Belge</title>
	
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
	
	<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" href="stil.css">
</head>
<?PHP include "bag.php"?>
	
<body>
	
	
	<!-- ANA MENÜ VE LOGO KISMI -->
	<?PHP include "menu.php"?>
	
<!-- Haber modülü slider -->
	
<?PHP include "slider.php"?>
	
	
	
	
	<!-- SAYFA DETAY MODÜLÜ -->
	<?PHP
		if(!empty($_GET["sira"])){
			
			$g_sira = $_GET["sira"];
			
			 
		$cevap = $bag->query("SELECT * from tbl_icerik WHERE sira=$g_sira and aktif=1");
			  if($cevap->num_rows > 0){
			
			$veri = $cevap->fetch_assoc();
				  ?>
		<div class="container mt-5 fotolar">
			<h3><?=$veri["baslik"]?></h3><hr>
			<div align="left"><?=$veri["detay"]?></div>
			
			<?PHP
		}else{
			header("Location: index.php");
		}
		}else{
			header("Location: index.php");
		}
	
	?>
	
	
		
		
	</div>
	
	
	
	
	
	
	
	
	<!--FOOTER ALT BÖLÜM-->
	<?PHP include "footer.php"?>
	
	
</body>
	
</html>
