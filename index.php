<html>
<head>
	<title>Cuevas</title>
</head>
<body>

<form Method = "POST" action = "destino.php">



<input type = "text" name = "Mensaje">

<input type = "submit">

 </form>

</body>
</html>

<?php 

echo "Hola PHP <br>";

echo "Muestra la variable REQUEST <br>";
var_dump($_REQUEST); 	
echo "<br>Muestra la variable GET <br>";
var_dump($_GET);
echo "<br>Muestra la variable POST <br>";
var_dump($_POST);
// todo esto es necesario hacerlo siempre para conectar 

//validar por primera vez revisar el isset, que me parece que no anda
if (isset($_POST ['Mensaje']))
{
 echo  $_POST ['Mensaje'];

} else
{

	echo "<br>Primer Ingreso";
}

 ?>