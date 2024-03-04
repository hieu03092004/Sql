<?php
$servername='localhost';
$username='root';
$password='@Cancot123';
$dbname = "moviebook";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
// $servername="localhost";
// //$port = 3306;
// $username="root";
// $password="@Cancot123";
// $database_name ="moviebook";
// $conn = new mysqli($servername,$username,$password,$database_name);
if(!$conn){
   die('Could not Connect My Sql:' .mysqli_error());
}
?>