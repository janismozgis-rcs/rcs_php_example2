<?php
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "web_kurss_02_10";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


include_once 'components/header.php';
$page = isset($_GET['page']) ? $_GET['page'] : 0;
switch ($page) {
    case '2':
        include_once 'components/page2.php';
        break;
    case '3':
        include_once 'components/page3.php';
        break;
    default:
        include_once 'components/page1.php';
        break;
}

include_once 'components/footer.php';