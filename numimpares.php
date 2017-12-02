<!DOCTYPE html>
<html>
<head>
	<title>Los numeros impares de 1 al 20 y del 50 al 100</title>
</head>
<body bgcolor="skyblue">
<center><h1 style="color:rgba(135,120,210,1); background-color:rgba(0,0,0,0.4) ">Numeros impares del 1 al 20 y del 50 al 100</h1></center>
<?php

echo "los numeros impares del 1 al 20 :<br>";

$num =1;
while ($num <= 20) {
	echo $num.", ";
$num = $num + 2;

}

echo "<br><br><br>";
echo "los numeros impares del 50 al 100 :<br>";

$num =51;
while ($num <= 100) {
	echo $num.", ";
$num = $num + 2;

}

?>

</body>
</html>