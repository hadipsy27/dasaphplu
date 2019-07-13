<!DOCTYPE html>
<html>
<head>
	<title>POST</title>
</head>
<body>
<?php if (isset($_POST["submit"])): ?>
	<h1>Selamat Datang, <?= $_POST["nama"]; ?>!</h1>		
<?php endif ?>	

<form action="" method="POST"> <!-- Ganti pada form action="latihan4.php" untuk melihat hasil dari latihan4 -->
	Masukkan Nama :<br>
	<input type="text" name="nama">
	<br>
	<button type="submit" name="submit">Kirim</button>
</form>

</body>
</html>