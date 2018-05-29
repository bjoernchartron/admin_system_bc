<?php

require 'include_database.php';

$results = $pdo->query('SELECT
    name.name,
    name.id,
    name.rechtsform,
    name.unterzeile,
    name.kurztext,
    name.profil,
    name.status,
    category.name AS category_name
FROM
    name,
    category
WHERE
    name.kategorie = category.id');

?><!doctype html>
<html lang="en">
  <head>
    <?php require 'include_head.php'; ?>
    <title>Admin-System</title>
  </head>
  <body>
    <?php require 'include_navigation.php'; ?>

    <div class="container mt-4">
        <div class="row">
            <div class="col">
                <h1>Kunden</h1>
            </div>
            <div class="col pt-1">
                <a class="btn btn-primary btn-lg float-right" href="kunden_add.php" role="button">Anlegen</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Rechtsform</th>
                    <th scope="col">Unterzeile</th>
                    <th scope="col">Kategorie</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($results as $row): ?>
                <tr>
                    <th scope="row"><?php echo $row['id'] ?></th>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['rechtsform'] ?></td>
                    <td><?php echo $row['unterzeile'] ?></td>
                    <td><?php echo $row['category_name'] ?></td>
                    <td>
                        <div class="float-right">
                            <a href="kunden_edit.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary btn-sm">Bearbeiten</a>
                            <a href="kunden_delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger btn-sm">Löschen</a>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>