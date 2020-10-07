<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Liste des voitures</title>

<style>
table, th, td {
  border: 1px solid blue;
  border-collapse: collapse;
}

.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

/* Change the link color on hover */
li a:hover {
  background-color: #555;
  color: white;
}
</style>

</head>

<body>
<?php
echo '<h2>Liste des voitures  présentées en tableau<br /><br /></h2>';
$base = mysqli_connect ('localhost', 'root', '')
       or die("Impossible de se connecter : " . mysqli_error());
mysqli_select_db ($base,'voitures') ;
$sql = "SELECT voiture.Nom, voiture.Vitesse, voiture.Puissance, voiture.Prix FROM voiture";
$req = mysqli_query($base,$sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysqli_error($base));

// // Affichage de l'entête du tableau
// echo "<table  border=\"0\" cellpadding=\"1\">";
// echo "<tr>";
// for ($champ=0; $champ < mysqli_field_count($base); $champ++)
//    {
//       $nom_du_champ =  mysqli_fetch_field_direct($req, $champ);
// 	  echo "<td width=\"150\" align=\"center\" bgcolor=\"#999999\">$nom_du_champ->name</td>";
//    }
// echo "</tr>";


// // affichage des voitures
// while ($data = mysqli_fetch_array($req))
// 	{
// 	    echo "<tr>"; // nouvelle ligne du tableau
// 		echo "<td align=\"center\">".utf8_encode($data['Nom'])."</td>";
// 		echo "<td align=\"center\">".utf8_encode($data['Vitesse'])." km/h"."</td>";
// 		echo "<td align=\"center\">".utf8_encode($data['Puissance'])." CV"."</td>";
// 		echo "<td align=\"center\">".utf8_encode($data['Prix'])." €"."</td>";
// 		echo "</tr>"; // fin de la ligne du tableau
// 	}

// terminer la table
echo "</table>";

echo "<br>";

echo "<div class=\"dropdown\">";
  echo"<button class=\"dropbtn\">Liste Voiture</button>";
  echo"<div class=\"dropdown-content\">";
    while($data = mysqli_fetch_array($req))
    {
      echo"<a align=\"center\">".utf8_encode($data['Nom'])."</a>";
    }
  echo"</div>";
echo "</div>";

// Libèration de la mémoire utilisée pour cette requête dans sql
//$data de PHP lui est toujours accessible !
mysqli_free_result ($req);

// Fermeture de sql
mysqli_close ($base);
?>
</body>
</html>
