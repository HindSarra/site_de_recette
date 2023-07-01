<?php

$dbHost = getenv('DB_HOST') ?: 'localhost';
$dbPort = getenv('DB_PORT') ?: '3306';
$dbName = getenv('DB_NAME') ?: 'mydb';
$dbUser = getenv('DB_USER') ?: 'myuser';
$dbPassword = getenv('DB_PASSWORD') ?: 'mypwd';


$pdo = new PDO('mysql:dbname=$dbName;port=$dbPort;host=$dbHost;charset=utf8mb4', '$dbUser', '$dbPassword');
