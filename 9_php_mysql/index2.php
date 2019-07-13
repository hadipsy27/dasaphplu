<?php  
// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() //mengembalikan array numerik/angka: var_dump($mhs[1]);
// mysqli_fetch_assoc() //mengembalikan array assosiative/string: var_dump($mhs["nama"]);
// mysqli_fetch_array() // mengembalikan angka / string [keduanya](jgn pakai yg ini)
// msyqli_fetch_object() //var_dump($mhs->nama); (jgn pakai yg ini)

// $mhs = mysqli_fetch_assoc($result);
// var_dump($mhs["jurusan"]);

//tampilkan semua data
// while ($mhs = mysqli_fetch_assoc($result)) {
// 	var_dump($mhs);
// }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>Nim</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php while ($row = mysqli_fetch_assoc($result)) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="">Ubah</a> |
			<a href="">Hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nim"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endwhile; ?>
	
</table>


</body>
</html>