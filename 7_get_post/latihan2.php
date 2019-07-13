<?php  
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) || 
	!isset($_GET["nim"]) ||
	!isset($_GET["email"]) ||
	!isset($_GET["jurusan"]) ||
	!isset($_GET["gambar"])) {
	// redirect
	header("Location: latihan1.php");
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Mahaiswa</title>
</head>
<body>

<ul>
	<li><img src="img/gambar.jpg"></li>
	<li><?= $_GET["nama"];  ?></li>
	<li><?= $_GET["nim"]; ?></li>
	<li><?= $_GET["email"]; ?></li>
	<li><?= $_GET["jurusan"]; ?></li>
</ul>
<li><a href="latihan1.php">Kembali</a></li>

</body>
</html>