<?php
//Creation tableau indexé
$tab=[1,2,5,"Hello",false];

$tab[]="elem 1 ajouté";

//Parcours : pour chaque $value dans $tab
foreach($tab as $value) {
	echo "<p>$value</p>";
}

//Parcours : pour chaque $value dans $tab
foreach($tab as $index=>$value) {
	echo "<p>$value</p>";
}

$tabAsso=['login'=>'azerty','connected'=>true];
$tabAsso['test']='ajout valeur';
//Parcours : pour chaque $value dans $tab
foreach($tabAsso as $key=>$value) {
	echo "<p>-$key : $value-</p>";
}

//Suppression d'éléments

unset($tabAsso['login']);

print_r($tabAsso);

echo count($tabAsso. "éléments dans le tableau associatif");
