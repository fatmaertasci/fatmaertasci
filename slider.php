<div id="carouselExampleCaptions" class="carousel slide">
  
	  
	  	  
<?PHP 
	$cevap= $bag->query("SELECT * from tbl_haber WHERE aktif=1 order by yer"); 
	if($cevap->num_rows > 0){?> 
	<div class="carousel-indicators"> 
		
	<?PHP for($i=0;$i<$cevap->num_rows;$i++){?> 
	<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?=$i?>" <?=($i==0)?'class="active" aria-current="true"':''?>
	aria-label="Slide"></button>
	<?PHP } ?> 
</div> 
<div class="carousel-inner"> 
	<?PHP 
	$say=0;
	while($veri= $cevap->fetch_assoc()){ 
	$say++;
	?> 
	
	
	<div class="carousel-item <?=($say==1)?'active':''?>">
	<img src="haber/<?=$veri["resim"]?>" class="d-block w-100" alt="..."> 
		<div class="carousel-caption d-none d-md-block bg-dark p-2 text-white bg-opacity-50"> 
			<h5><?=$veri["baslik"]?></h5> 
			<p><?=$veri["ozet"]?></p>
			<a class="btn btn-primary" href="haber_detay.php?sira=<?=$veri["sira"]?>">Detaylar</a>
		</div> 
	</div>
		<?PHP
	}
		}
		?>
 
	

  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Önceki</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Sonraki</span>
  </button>
</div>