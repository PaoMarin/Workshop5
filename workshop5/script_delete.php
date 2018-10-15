<?php 

//Lammar a la clase Student
require 'student.php';

//Crea la instancia y se envia el parametro
	$students = new student($argv[1]);

//Se llama la función delete_student que elimina al estudiante 
	$students.delete_student();

?>