<?php
$host = 'localhost';
$username = 'm0dolzh';
$password = '111';
$dbname = 'dz';
$conn = mysqli_connect($host, $username, $password);
mysqli_set_charset($conn, 'utf8');
mysqli_query($conn,"CREATE DATABASE $dbname");
mysqli_select_db($conn, $dbname);
mysqli_query($conn,"CREATE TABLE people(
                        id INT(3) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        firstname VARCHAR(20) NOT NULL,
                        lastname VARCHAR(20) NOT NULL,
                        password VARCHAR(50) NOT NULL,
                        age VARCHAR(10))
");
$sql_insert = "INSERT INTO people(firstname, lastname, password, age) VALUES('Kate', 'Blank', 'a3184701dea204b15db46a41b1300832', '32');";
$sql_insert .= "INSERT INTO people(firstname, lastname, password, age) VALUES('Maria', 'Netuda', '200820e3227815ed1756a6b531e7e0d2', '25');";
$sql_insert .= "INSERT INTO people(firstname, lastname, password, age) VALUES('John', 'andJohnson', '958d23298884c3a9340af4f842444967', '54');";
$sql_insert .= "INSERT INTO people(firstname, lastname, password, age) VALUES('John', 'andJohnson', '958d23298884c3a9340af4f842444967', '54');";
$sql_insert .= "INSERT INTO people(firstname, lastname, password, age) VALUES('Hulio', 'Neiglesios', 'b8bede92786d072c853f2c792b989dd0', '21')";
mysqli_multi_query($conn, $sql_insert);