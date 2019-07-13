<?php  
// SUPERGLOBALS
// Variable global milik PHP
// merupakan array assosiative
// $_GET

$mahasiswa = [
	[
	"nama" => "Hadi Prasetyo",
	"nim" => "2016150036",
 	"email" => "hadipsy27@gmail.com",
	"jurusan" => "Teknik Informatika",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "dody Fimansyah",
	"nim" => "2019180045",
 	"email" => "dodyf@gmail.com",
	"jurusan" => "Teknik Industri",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Fatkhur oji coba",
	"nim" => "2016150098",
 	"email" => "ojicoba@gmail.com",
	"jurusan" => "Teknik Penyesalan",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Gopal Noval Gopay",
	"nim" => "2019380009",
 	"email" => "gopalgopay@gmail.com",
	"jurusan" => "Teknik Kegilaan",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Sika tenan",
	"nim" => "2015180001",
 	"email" => "sikerlah@gmail.com",
	"jurusan" => "Teknik Kesetresan",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "atoq astikoh",
	"nim" => "2010100011",
 	"email" => "atoqatikf@gmail.com",
	"jurusan" => "Teknik Bodo Amat",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Gemblung sangat",
	"nim" => "2011110005",
 	"email" => "Gemblung@gmail.com",
	"jurusan" => "Teknik bego",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "bajigur enak",
	"nim" => "2019140211",
 	"email" => "bajigur@gmail.com",
	"jurusan" => "Teknik Minuman",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Bayi Bajang",
	"nim" => "2017110016",
 	"email" => "Bajang@gmail.com",
	"jurusan" => "Teknik anak dewasa",
	"gambar" => "gambar.jpg"
	 ],
	 [
	"nama" => "Bayi Iblis",
	"nim" => "2019180099",
 	"email" => "blezeup@gmail.com",
	"jurusan" => "Teknik Storm",
	"gambar" => "gambar.jpg"
	 ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<ul>
	<?php foreach ($mahasiswa as $mhs): ?>
		<li>
			<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>
			&nim=<?= $mhs["nim"]; ?>
			&email=<?= $mhs["email"]; ?>
			&jurusan=<?= $mhs["jurusan"]; ?>
			&gambar=<?= $mhs["gambar"]; ?>">

			<?= $mhs["nama"]; ?>
				
			</a>
		</li>
	<?php endforeach ?>

</ul>
</body>
</html>