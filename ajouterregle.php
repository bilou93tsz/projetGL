<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>

<title>Ajouter une regle</title>

</head>

<body>

<h1>Ajouter une régle en Français et en Anglais</h1>



<form method='post' action='ajouterregle.php'>

<p><label>Regle en Français</label><input type = "text" name = "regle1" /></p>

<p><label>Regle en Anglais</label><input type = "text" name = "regle2" /></p>

<p><input type ="submit" value="envoyer">

</form>

// A COMPLETER QUAND LA BASE DE DONNEES SERA TERMINEE

<?php

if($_POST['regle1']!='' && $_POST['regle2']!=''){}

?>





</body>

</html>

