<?php
$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

echo "Hola!! :) This is it!!!";

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

$conn = new mysqli($server, $username, $password, $db);

if($conn->connect_error) 
  die($conn->connect_error);

$result=$conn->query("SELECT * FROM clasicos");
if(!$result) die($conn->error);

$num_rows = $result->num_rows;
