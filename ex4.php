<?php
$title='Exercice 4 : tableaux';
include 'header.php';

$nbLignes=$_GET['5']??2; 
$nbCols=$_GET['4']??5;
?>
<table border='1'>
	<?php
	for($i=0;$i<$nbLignes;$i++) {
		echo "<tr>"; 
	}
	for($i=0;$i<$nbCols;$j++) {
		echo "<td>$i-$j</td>"; 
	} 
	



