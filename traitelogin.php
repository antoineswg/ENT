<?php
session_start();
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    $stmt = $db->prepare('SELECT * FROM users WHERE mail = :mail');
    $stmt->bindParam(':mail', $mail);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
        $_SESSION['user_name'] = $user['name'];
        header('Location: index.php?status=logged');
        exit();
        }
        else {
            header('Location: index.php?erreur=password');
        }
    } else {
        header('Location: index.php?erreur=mail');
    }
}
?>