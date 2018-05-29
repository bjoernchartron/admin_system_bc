<?php 

require 'include_database.php';

if ($_POST['status'] == 'true') {
  $status = 1;
} else {
  $status = 0;
}

$sql = "INSERT INTO name SET
  name = ?,
  rechtsform = ?,
  unterzeile = ?,
  kurztext = ?,
  profil = ?,
  status = ?,
  kategorie = ?";

$pdo->prepare($sql)->execute([
  $_POST['name'],
  $_POST['rechtsform'], 
  $_POST['unterzeile'], 
  $_POST['kurztext'], 
  $_POST['profil'], 
  $status, 
  $_POST['kategorie'],
]);

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Admin-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <h1>Kunde angelegt</h1>
        <p class="mt-4">Der Kunde wurde erfolgreich im System gespeichert.</p>
        <a class="btn btn-primary mt-3" href="index.php" role="button">Zur Übersicht</a>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>