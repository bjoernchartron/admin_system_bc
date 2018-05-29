<?php

require 'include_database.php';

$sql = "DELETE FROM name WHERE id = ?";

$pdo->prepare($sql)->execute([$_GET['id']]);

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Admin-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Kunde gelöscht</h1>
        <p class="mt-4">Der Kunde wurde erfolgreich aus dem System entfernt.</p>
        <a class="btn btn-primary mt-3" href="index.php" role="button">Zur Übersicht</a>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>