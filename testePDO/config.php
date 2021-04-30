<?php

use Dotenv\Dotenv;

require '../vendor/autoload.php';
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();


$driver = $_ENV["PDO_DRIVER"];
$host = $_ENV["PDO_HOST"];
$port = $_ENV["PDO_PORT"];
$dbname = $_ENV["PDO_DBNAME"];
$username = $_ENV["PDO_USERNAME"];
$password = $_ENV["PDO_PASSWORD"];
$dsn = "$driver:host=$host;port=$port;dbname=$dbname;user=$username;password=$password";

$pdo = new PDO($dsn);
