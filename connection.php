<?php

$db = parse_url(getenv("DATABASE_URL"));


try{
	$pdo = new PDO("pgsql:" . sprintf(
		"host=%s;port=%s;user=%s;password=%s;dbname=%s",
		$db["host"],
		$db["port"],
		$db["user"],
		$db["pass"],
		ltrim($db["path"], "/")
	));
}
catch(PDOException $pe)
{
	die('Connection error, because: ' .$pe->getMessage());
}
