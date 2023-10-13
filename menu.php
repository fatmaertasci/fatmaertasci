<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logo" src="logo.png"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">ANASAYFA</a>
        </li>
		  
		  
		 <?PHP
		$cevap = $bag->query("SELECT * from tbl_icerik WHERE kat=0 and aktif=1 order by yer");
			  if($cevap->num_rows > 0){
	while($veri = $cevap->fetch_assoc()){
		
		$alt_menu= $bag->query("SELECT * FROM tbl_icerik WHERE kat=".$veri["sira"]." and aktif=1 order by yer");
		if($alt_menu->num_rows > 0){
		?>	
		   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <?=$veri["link"]?>
          </a>
          <ul class="dropdown-menu">
			  <?PHP
			  while($alt_veri =$alt_menu->fetch_assoc()){
			  ?>
            <li><a class="dropdown-item" href="sayfa_detay.php?sira=<?=$alt_veri["sira"]?>"><?=$alt_veri["link"]?></a></li>
             <?PHP
			  }
			  ?>
          </ul>
        </li>
		  <?PHP 
		}else{
			?>
		}
		
		  
		  
		<li class="nav-item">
          <a class="nav-link" href="sayfa_detay.php?sira=<?=$veri["sira"]?>"><?=$veri["link"]?></a>
        </li>
<?PHP
	}
}
			  }
?>
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
		  
        
       
        
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Aranacak Kelime" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">ARA</button>
      </form>
    </div>
  </div>
</nav>