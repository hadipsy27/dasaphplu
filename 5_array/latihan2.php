<?php 
// Pengulangan pada array
//for /foreach
$angka = [3,2,5,4,1,7,6,90,23];

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Latihan 2</title>
 </head>
 <body>
 	<style>
 		.kotak{
 			width: 50px;
 			height: 50px;
 			background-color: salmon;
 			text-align: center;
 			line-height: 50px;
 			margin: 3px;
 			float: left;
 		} 
 		.clear{
 			clear: both;
 		}
 	</style>
 
 </body>
 </html>


<?php for( $i = 0; $i < count($angka); $i++ ){ ?>
	<div class="kotak"><?php echo $angka[$i]; ?></div>
<?php } ?>

<div class="clear"></div>


<?php foreach ($angka as $a ) { ?>
	<div class="kotak"><?php echo $a; ?></div>
 <?php } ?>

<div class="clear"></div>

<?php foreach ($angka as $x) : ?>
	<div class="kotak"><?=  $x; ?></div>
<?php endforeach; ?>