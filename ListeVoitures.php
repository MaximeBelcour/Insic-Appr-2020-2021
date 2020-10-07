<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste des voitures</title>
</head>

<body>
<?php
echo '<h2>Liste des voitures<br /><br /></h2>';
$base = mysqli_connect ('localhost', 'root', '')
       or die("Impossible de se connecter : " . mysqli_error());
mysqli_select_db ($base,'voitures') ;
$sql = "SELECT voiture.* FROM voiture";
$req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($base));


// affichage des voitures
while ($data = mysqli_fetch_array($req))
	{
		echo utf8_encode($data['Nom'])."&nbsp";
		echo utf8_encode($data['Vitesse'])."&nbsp"."km/h"."&nbsp"."&nbsp";
		echo utf8_encode($data['Puissance'])."&nbsp"."CV"."&nbsp"."&nbsp";
		echo utf8_encode($data['Prix'])."€".'<br />';
	}

// Libèration de la mémoire utilisée pour cette requête dans sql
//$data de PHP lui est toujours accessible !
mysqli_free_result ($req);

// Fermeture de sql
mysqli_close ($base);
?>
</body>
</html>
