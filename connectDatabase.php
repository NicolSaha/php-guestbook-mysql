<?php
declare(strict_types=1);

function openConnection() : PDO {
// Try to figure out what these should be for you
$dbhost    = "localhost";
$dbuser    = "becode";
$dbpass    = "becode";
$db        = "GuestbookData";

$driverOptions = [
PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

$pdo = new PDO('mysql:host='. $dbhost .';dbname='. $db, $dbuser, $dbpass, $driverOptions);

return $pdo;
}