<!DOCTYPE html>
<html>
<head>
<title>Apprentis 2020-2021</title>

<style>
table, th, td {
  border: 1px solid blue;
  border-collapse: collapse;
}
</style>

</head>
<body>

<h1>Etude du html</h1>
<p>exemple de paragraphe.</p>

<p>Autre exemple de paragraphe.</p>

<!--
insertion d'un lien
-->
<p><a href="https://www.w3schools.com/">Visiter W3Schools.com!</a></p>

<!--
insertion d'une image
-->
<img src="mustang.jpg" alt="Mustang">

<!--
Saut de ligne
-->
<br/>

<table style="width:100%">
  <tr>
    <th>Firstname</th>
    <th>Lastname</th>
    <th>Age</th>
  </tr>
  <tr>
    <td>Jill</td>
    <td>Smith</td>
    <td>50</td>
  </tr>
  <tr>
    <td>Eve</td>
    <td>Jackson</td>
    <td>94</td>
  </tr>
  <tr>
    <td>John</td>
    <td>Doe</td>
    <td>80</td>
  </tr>
</table>

<!--Code php simple-->
<?php
echo "<br/> Salut aux apprentis!<br/><br/>";

for ($x = 1; $x <= 10; $x++) {
  echo strval($x)." --> ".strval($x*$x)."<br/>";
}
?>

<br>
<label for="fname">First name:</label>
<input type="text" id="fname" name="fname"><br><br>

<label for="cars">Choose a car:</label>

<select name="cars" id="cars">
  <option value="volvo">Volvo</option>
  <option value="saab">Chacal</option>
  <option value="mercedes">Mercedes</option>
  <option value="audi">Audi</option>
</select>

</body>
</html>
