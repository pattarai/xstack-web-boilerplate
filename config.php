<?php

header('Access-Control-Allow-Origin: *');
error_reporting(0);

$server = "localhost";
$username = "root";
$password = "";
$db = "test";

$conn = new mysqli($server, $username, $password, $db);