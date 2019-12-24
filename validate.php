<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
/*$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL
)";*/

  




$email=$_POST["name"];
$password=$_POST["pass"];
$sql1="insert into myGuests(id,email,password) values(2,'$email','$password');";
echo $sql1;
if($conn->query($sql1) === TRUE)
{
	echo "inserted success";
}
$conn->close();


?>


