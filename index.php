<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>ENT</title>
</head>
<body>
    <?php
        session_start();
        include 'connexion.php';
        if (!isset($_GET['status'])) {
            include 'login.php';
        }
        if (isset($_GET['status']) && $_GET['status'] == 'logged') {
            echo 'Bienvenue ' . $_SESSION['user_name'] . ' !';
        }
    ?>
</body>
</html>