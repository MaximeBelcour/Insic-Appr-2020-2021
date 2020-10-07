<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Liste des voitures</title>
</head>

<body>
<?php
echo '<h2>Liste des voitures  présentées en tableau<br /><br /></h2>';
$base = mysqli_connect ('localhost', 'root', '')
       or die("Impossible de se connecter : " . mysqli_error());
mysqli_select_db ($base,'voitures') ;
$sql = "SELECT voitures.Nom, voitures.Vitesse, voitures.Puissance, voitures.Prix FROM voitures";
$req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($base));

// Affichage de l'entête du tableau
echo "<table  border=\"0\" cellpadding=\"1\">";
echo "<tr>";
for ($champ=0; $champ < mysqli_field_count($base); $champ++)
   {
      $nom_du_champ =  mysqli_fetch_field_direct($req, $champ);
	  echo "<td width=\"150\" align=\"center\" bgcolor=\"#999999\">$nom_du_champ->name</td>";
   }
echo "</tr>";


// affichage des voitures
while ($data = mysqli_fetch_array($req))
	{
	    echo "<tr>"; // nouvelle ligne du tableau
		echo "<td align=\"center\">".utf8_encode($data['Nom'])."</td>";
		echo "<td align=\"center\">".utf8_encode($data['Vitesse'])." km/h"."</td>";
		echo "<td align=\"center\">".utf8_encode($data['Puissance'])." CV"."</td>";
		echo "<td align=\"center\">".utf8_encode($data['Prix'])." €"."</td>";
		echo "</tr>"; // fin de la ligne du tableau
	}

// terminer la table
echo "</table>";

// Libèration de la mémoire utilisée pour cette requête dans sql
//$data de PHP lui est toujours accessible !
mysqli_free_result ($req);

// Fermeture de sql
mysqli_close ($base);
?>
</body>
</html>
