<?php 
$mahasiswa = [
	["Hadi Prasetyo", "2016150036", "hadipsy27@gmail.com", "Teknik Informatika"],
	["Andi Hairudin", "2015150045", "andiha@gmail.com", "Sistem Informasi"]
]; 

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>


	<h1>Daftar Mahasiswa</h1>
	<?php foreach ($mahasiswa as $mhs): ?>
	<ul>
		

		<li>Nama :<?= $mhs[0]; ?></li>
		<li>NIM :<?= $mhs[1]; ?></li>
		<li>Email :<?= $mhs[2]; ?></li>
		<li>Jurusan :<?= $mhs[3]; ?></li>

		
	</ul>
	<?php endforeach ?>

</body>
</html>