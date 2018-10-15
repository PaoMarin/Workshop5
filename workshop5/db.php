<?php 

//Definición de variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = ""; 

//Crea el constructor y se setean las variables
public db($servername, $username,$password,$dbname){
	$this->$servername = $servername;
	$this->$username = $username;
	$this->$password = $password;
	$this->$dbname = $dbname;
}

//Crea la conexión
$enlace =  mysql_connect($servername,$username,$password,$dbname);
if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
echo 'Conectado satisfactoriamente';
//Se cierra la consulta
mysql_close($enlace);

 ?>