<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
	<!-- buat css nya untuk class tr -->
	<style>
		.warna-baris{
			background-color: green;
		}
	</style>
</head>
<body>

	<table border="1" cellpadding="10" cellspacing="0">
		 <?php for ($i=1; $i <= 5 ; $i++) {  ?> <!-- untuk { standart pembukan di php -->
			<!-- untuk perulangan if dibawah= sisa bagi 1 = ganjil, sisa bagi 0 = genap -->
			<?php if ($i % 2 ==1 ) : ?>
				<!-- masukkin classnya  -->
				<tr class="warna-baris">
			<?php else : ?>
				<tr>
			 <?php endif; ?> <!-- endif; di php untuk penutup if -->
				<?php for ($j=1; $j <= 5 ; $j++) :  ?>
					<td><?= "$i, $j"; ?></td>
				<?php endfor; ?> <!-- endfor;  di php untuk penutup php saat mengguankan for -->
			</tr>
		<?php } ?> <!--  untuk } standar umum penutup di php  in penutup php yg paling atas-->
	</table>

</body>
</html>