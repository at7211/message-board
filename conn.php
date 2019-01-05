
<?php 

$servername = "localhost";

$username = "student2nd";

$password = "mentorstudent123";

$dbname = "mentor_program_db";



$conn = new mysqli($servername, $username, $password, $dbname);

$conn->query("SET NAMES 'UTF8'");

?>