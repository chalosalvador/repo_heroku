<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = $url["host"];
$username = $url["user"];
$password = $url["pass"];
$db = substr($url["path"], 1);

echo "<br>Server: " . $server . '<br>';
echo "Username: " . $username . '<br>';
echo "Password: " . $password . '<br>';
echo "DB: " . $db;