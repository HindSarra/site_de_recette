<?php
$dbname = getenv('DB_NAME');
$host = getenv('DB_HOST');
$pdo = new PDO('mysql:dbname=$dbname;host=$host;charset=utf8mb4', getenv('DB_USER'), getenv('DB_PASSWORD'));
