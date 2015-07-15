<?php
<<<<<<< HEAD
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

echo "Hola!! :) This is it!!!";
=======
echo "Hola Mundo!!!";

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));
>>>>>>> beb4468777fea9b61ef16a20aac7eb638b6f3790

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

<<<<<<< HEAD
$conn = new mysqli($server, $username, $password, $db);

if($conn->connect_error) 
  die($conn->connect_error);

$result=$conn->query("SELECT * FROM clasicos");
if(!$result) die($conn->error);

$num_rows = $result->num_rows;
echo $num_rows;
=======
echo "Server: " . $server . '<br>';
echo "Username: " . $username . '<br>';
echo "Password: " . $password . '<br>';
echo "DB: " . $db;
>>>>>>> beb4468777fea9b61ef16a20aac7eb638b6f3790
