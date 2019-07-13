<!DOCTYPE html>
<html>
<head>
	<title>Perulangan</title>
</head>
<body>


<?php 
//Pengulangan
//for
//while
//do..while
//foreach : pengulangan khusus array bahas nanti

for ($i=0; $i < 5; $i++) { 
	echo "Hello Word! <br>";
}
echo "<br>";

$i = 0;
while ($i < 5) {
	echo "HEllo Word! <br>";
$i++;
}
echo "<br>";


$i = 0;
do {
	echo "HEllo Word <br>";
$i++;
} while ( $i < 5);
echo "<br>";


 ?>

</body>
</html>