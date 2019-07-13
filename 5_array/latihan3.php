<?php 
// cara 1
// $mahasiswa = ["Hadi Prasetyo", "2016150036", "Teknik Informatika", "Hadipsy27@gmail.com"];

// cara 2
$mahasiswa = [
	["Hadi Prasetyo", "2016150036", "Teknik Informatika", "Hadipsy27@gmail.com"],
	["chsaku shin", "2017150069", "Teknik Sipil", "chsaoku@hamli.com"],
	["Riko", "20999326", "Teknik Mesin", "Riko@gmail.com"]

];

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 
<h1>Daftar Mahasiswa</h1>
<!-- cara 1 -->
<!-- <ul>
	?php foreach ($mahasiswa as $mhsiswa) : ?>
		<li>= $mhsiswa ?></li>
	?php endforeach; ?>
</ul> -->


<!-- cara 2 -->
<?php foreach ($mahasiswa as $mhs) : ?>
<ul>
	<li>Nama    :<?= $mhs[0];  ?></li>
	<li>NIM     :<?= $mhs[1];  ?></li>
	<li>Jurusan :<?= $mhs[2];  ?></li>
	<li>Email   :<?= $mhs[3];  ?></li>
</ul>
<?php endforeach; ?>




 </body>
 </html>