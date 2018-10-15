<?php 

//Llamar a la clase Student
require 'student.php';

//Se instancia la variable student
$students = new student($argv[1]);

//Se llama la función update_student que inserta al estudiante 
$students.update_student();
 ?>