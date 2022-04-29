<?php
date_default_timezone_set("Africa/Dar_es_Salaam");
$DB_HOST = "159.203.178.161";
$DB_USER = "root";
$DB_PASS = "Macowigo@tech";
$DB_NAME = "URL";

$OPTIONS = [
	PDO::ATTR_EMULATE_PREPARES   => false, // turn off emulation mode for "real" prepared statements
	PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //turn on errors in the form of exceptions
	PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, //make the default fetch be an associative array
];

try {
	$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}", $DB_USER, $DB_PASS, $OPTIONS);
} catch (PDOException $e) {
	echo $e->getMessage();
}
