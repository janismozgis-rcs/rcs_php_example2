<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "web_kurss_02_10";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
