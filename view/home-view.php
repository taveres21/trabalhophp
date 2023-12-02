<?php

    session_start();

    if(!isset($_SESSION['id'])) {
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../bootstrap/css/bootstrap.min.css'>
    <title>Listas de <?php echo $_SESSION['nome']; ?></title>
</head>
<body>
    <?php require_once '../components/navbar.php' ?>
    <h2>
    <?php
      echo $_SESSION['id'];
    ?>
      </h2>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>