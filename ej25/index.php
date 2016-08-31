<html>
<head>
	<title></title>
</head>
<body>

	<form Method = "POST">

<input type = "text" name = "NumeroUno">
<input type = "text" name = "NumeroDos">
<input type = "submit">

 </form>

</body>
</html>

<?php 

var_dump($_REQUEST);

if (isset($_POST ['NumeroUno']))
{
 echo  $_POST ['NumeroUno'];

} else
{

	echo "<br>Primer Ingreso";
}

if (isset($_POST ['NumeroDos']))
{
 echo  $_POST ['NumeroDos'];

} else
{

	echo "<br>Primer Ingreso";
}

 ?>