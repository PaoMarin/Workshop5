<?php 
require 'db.php';


//Definen las variables publicas
public $id;
public $firstname;
public $lastname;
public $email_address;

//Crea el constructor y se le asignan las variables como van a ingresar por parametro
public student($argv[1], $argv[2], $argv[3], $argv[4]){
	$this->id = $argv[1];
	$this->first_name = $argv[2];
	$this->last_name = $argv[3];
	$this->email_address = $argv[4];
}

$connection = new db();
$connection.enlace();

//Se crea una función que inserte los datos del estudiate en la tabla student
function insert_student(){

	$sql = "INSERT INTO Student(id,firstname,lastname,email_address)
VALUES (this->id,this->firstname,this->lastname,this->email_address)";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>";
}
}

//Se crea una función que edite los datos del estudiante en la tabla student
function update_student(){

	$sql = "UPDATE Student SET firstname= this->firstname,lastname =this->lastname,email_address= this->email_address WHERE id= this->id";

if ($connection->query($sql) === TRUE) {
    echo "New record update successfully";
} else {
    echo "Error: " . $sql . "<br>";
}
 }

 //Se crea una función que borre los datos del estudiante en la tabla student
function delete_student(){

	$sql = "DELETE FROM Student WHERE id= this->id";

if ($connection->query($sql) === TRUE) {
    echo "Record delete successfully";
} else {
    echo "Error: " . $sql . "<br>";
}
 }
?>