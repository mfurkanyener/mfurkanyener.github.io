<?php

$mysqlsunucu = "localhost";
$mysqlkullanici = "root";
$mysqlsifre = "";
$db = new PDO("mysql:host=$mysqlsunucu; dbname=survey_database; charset=utf8", $mysqlkullanici, $mysqlsifre);

?>
