<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"
<title> Exercice 1 </title>
</head>

  <body>

    <a href="?message=Test1"> Test 1 </a>
    <a href="?message=Test2"> Test 2 </a>
    <a href="?message=Test3"> Test 3 </a>
<?php
echo "Le contenu du paramètre message passé dans l'URL est : ".($_GET['message']??'vide');

   ?>
</body>
