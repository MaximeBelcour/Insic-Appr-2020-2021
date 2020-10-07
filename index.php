<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Apprentis 2020-2021</title>

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

<h1>Etude du html</h1>

<ul>
  <li><a href="#home">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
</ul>

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

<br><br>
<div class="dropdown">
  <button class="dropbtn">Dropdown</button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>

</body>
</html>
