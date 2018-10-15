<?php 

//Llamar a la clase Student
require 'student.php';

//Crea la instancia y se envia el parametro
$students = new student($argv[1], $argv[2], $argv[3], $argv[4]);

//Se llama la función insert_student que crea el estudiante en la tabla
$students.insert_student();
 ?>