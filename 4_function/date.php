<!DOCTYPE html>
<html>
<head>
	<title>Date Function</title>
</head>
<body>

<?php 
//Date
//Untuk menampilkan tanggal dg format tertentu
 echo date("l, d-M-Y");
 echo "<br>";
 

//Time
//UNIX Timestamp / EPOCH time
//detik yg sudah berlalu sejak 1 jan 1970 smp sekarang
// echo time();
echo date("l", time()+60*60*24*100);echo "<br>"; //seratus hari dr sekarang = 60*60(1 jam) * 24(1hari)*100(seratus hari yg akan datang), jika seratus hari sebelum sekarang maka tinggal di beri time()-60*60*24*100); minus saja.


// membuat detik sendiri
// mktime(0,0,0,0,0,0);
// jam, menit, detik, bulan, tanggal, tahun
 echo date("l",  mktime(0,0,0,7,27,1997));
echo "<br>";

//strtotime
echo date("l", strtotime("27 july 1997"));

 ?>

</body>
</html>