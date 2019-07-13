<!DOCTYPE html>
<html>
<head>
	<title>Penulisan</title>
</head>
<body>
	<h3>Penulisan PHP di Dalam HTML</h3>
	<?php 
		echo "Kira - Kira Seperti ini";
	 ?>
 	<h3>Semangat!</h3>
</body>
</html>


 	<h6>-----------------------------------------------</h6>
 	<h5>Kurang GREGETTTTTT!!!!!</h5>
 	<h6>-----------------------------------------------</h6>

 	<!-- ini penulisan untuk perulangan for -->
	 <?php for ($i=0; $i < 5; $i++) : ?>
	 	<!-- print 5 kali ea -->
	 	<h2>Endfor</h2>
	 	
	 <?php endfor; ?>

<!-- haaaaaaaaaaaaaaaaaaaaa -->

	 <h6>-----------------------------------------------</h6>

	 <!-- untuk if else -->
	 <?php $i=300; if ($i < 20) : ?>
	 	<?= "ayam"; ?>
	 <?php else : ?>
	 	<?= "kucing" ?>
	 <?php endif; ?>

	 <h6>-----------------------------------------------</h6>