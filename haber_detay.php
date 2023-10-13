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
	<div class="buyukfoto position-fixed">
		
		<img src="galeri/3.jpg">
		<p>Açıklama Buraya Gelecek</p>
	</div>
	<!-- ANA MENÜ VE LOGO KISMI -->
	<?PHP include "menu.php"?>
	
<!-- Haber modülü slider -->
	
<?PHP include "slider.php"?>
	
	
	<?PHP
	if(empty($_GET["sira"])){
		header("location: index.php");
	}else{
		$g_sira = $_GET["sira"];
		$cevap = $bag->query("SELECT * from tbl_haber WHERE sira=$g_sira");
		if($cevap->num_rows > 0){
			$veri = $cevap->fetch_assoc();
			$v_baslik = $veri["baslik"];
			$v_resim = $veri["resim"];
			$v_ozet = $veri["ozet"];
			$v_detay = $veri["detay"];	
		}else{
			header("location: index.php");
		}
	}
	
	
	
	?>
	
	
	
	<!-- FOTOGALERİ MODÜLÜ -->
	<div class="container mt-5 fotolar">
		<h3><?=$v_baslik?></h3>
	  <hr>
		
	<p><img src="haber/<?=$v_resim?>"> <?=$v_ozet?></p>
		<hr>
		<p><?=$v_detay?></p>
		
	</div>
	
	
	
	
	
	
	
	
	<!--FOOTER ALT BÖLÜM-->
	<?PHP include "footer.php"?>
	
	
	<script>
	$(".buyukfoto").click(function(){
		$(this).fadeOut();
		
	});
		
		$(".fotolar img").click(function(){
			var kucuksrc = $(this).attr("src");
			var kucukyazi = $(this).attr("alt");
			
			$(".buyukfoto img").attr("src",kucuksrc);
			
			$(".buyukfoto p").text(kucukyazi);
			
			
			
			
			
				$(".buyukfoto").fadeIn();		
		});
		
		
		
		
	</script>
</body>
	
</html>
