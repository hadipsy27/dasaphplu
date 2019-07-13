<?php  

// supaya user tidak bisa mengakess directory
// defined('_VALID_OZ') or die('tidak diperkenankan');
// include ("./functions.php");

session_start();

if ( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
	
}

require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// var_dump($id);
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs[0]["nama"]); // array numerik

//cek apakah tombol submit sudah ditekan atau blm
if (isset($_POST["submit"])) {

	// cek apakah data berhasil di ubah atau tidak
	if (ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		";
	} else{
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}

}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
</head>
<body>
	<h1>Ubah Data Mahasiswa</h1>
	<form action="" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">
		<ul>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
			</li>
			<li>
				<label for="nim">NIM : </label>
				<input type="text" name="nim" id="nim" required value="<?= $mhs["nim"]; ?>">
			</li>
			<li>
				<label for="email">Email : </label>
				<input type="email" name="email" id="email"required value="<?= $mhs["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
			</li>
			<li>
				<label for="gambar">Gambar : </label> <br>
				<img src="img/<?= $mhs["gambar"]; ?>" width="40"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Ubah Data</button>
			</li>
		</ul>

	</form>

</body>
</html>