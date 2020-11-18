<?php

//Création de fonction

function afficher (string $message, int $size=10,string $color="auto"){
     echo "<p style='border: {$border}; color: {$color};font-size: {$size}px;'>$message</p>";
}

function title(String $text, int $niveau=1){
	echo "<h{$niveau}">{$test}</h{$niveau}>";
}

 //Utilisation de fonction
title("Exemple de fonction");
afficher('Hello en taille par défault');
afficher('hello',20,'orange');
afficher('hi',30,'darkCyan','1px solid');