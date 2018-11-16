<?php
include_once 'db.php';

$errors = false;

if (empty($_POST['email'])) {
    $errors = true;
}
if (empty($_POST['password'])) {
    $errors = true;
}
if (empty($_POST['first_name'])) {
    $errors = true;
}
if (empty($_POST['last_name'])) {
    $errors = true;
}
if ($_POST['password'] != $_POST['password2']) {
    $errors = true;
}


if ($errors) {
    // redirect back with error message
    $_SESSION['error'] = true;
    header('Location: index.php?page=3');
} else {
    // insert in the DB
    $query = $conn->prepare("
        INSERT INTO 
            users 
        SET 
            email = ?, 
            password = ?, 
            name = ?, 
            last_name = ?
    ");
    $result = $query->execute([
        $_POST['email'],
        md5($_POST['password']),
        $_POST['first_name'],
        $_POST['last_name'],
    ]);
    if ($result) {
        $_SESSION['success'] = true;
        header('Location: index.php?page=3');
    } else {
        $_SESSION['error'] = true;
        header('Location: index.php?page=3');
    }
}

