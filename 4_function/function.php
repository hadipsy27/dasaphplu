<?php 
function salam($waktu ="Datang", $nama = "Hadi"){
	return "Selamat $waktu, $nama!";
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan Fuction</title>
 </head>
 <body>
 	<!-- pengganti kata (php ) menjadi (= ) itu sama seperti echo -->
 	<h1><?= salam("Siang"); ?></h1> 
 </body>
 </html>