<?PHP 
session_start();

$bag = mysqli_connect("localhost","fatma","123","yonetim_db");

//$bag = mysqli_connect("sql312.epizy.com","epiz_34312998","6CYZBge7FMMPNCi","epiz_34312998_deneme");
if(mysqli_connect_errno()){
	echo "Bağlantı Hatası MySQL:". mysqli_connect_error();
	exit();
	
	
}


?>