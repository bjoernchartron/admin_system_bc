<?php 

require 'include_database.php';

$sql = "SELECT * FROM name WHERE id=?";
$statement = $pdo->prepare($sql);
$statement->execute([$_GET['id']]);
$row = $statement->fetch(PDO::FETCH_ASSOC);

$results = $pdo->query('SELECT * FROM category');

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
            <div class="col-sm-6">
                <h1>Kunde bearbeiten</h1>
                <form class="mt-4" action="kunden_edit_thanks.php?id=<?php echo $row['id'] ?>" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="z. B. Politik" value="<?php echo $row['name']?>">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Rechtsform</label>
                        <input type="text" class="form-control" name="rechtsform" id="rechtsform" placeholder="z. B. Politik" value="<?php echo $row['rechtsform']?>">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Unterzeile</label>
                        <input type="text" class="form-control" name="unterzeile" id="unterzeile" placeholder="z. B. Politik" value="<?php echo $row['unterzeile']?>">
                    </div>
                    <div class="form-group">
                        <label for="short_text">Kurztext</label>
                        <input type="text" class="form-control" name="kurztext" id="kurztext" placeholder="z. B. Politik" value="<?php echo $row['kurztext']?>">
                    </div>
                    <div class="form-group">
                        <label for="text">Profil</label>
                        <textarea class="form-control" name="profil" id="profil" rows="6" placeholder="z. B. Dang ipsum dolor sizzle amet, shiz adipiscing elit."><?php echo $row['profil']?></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="is_active" value="true" id="status"<?php if($row['status']==1) { ?>checked <?php } ?>>
                        <label class="form-check-label" for="status">
                            Aktiviert
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="kategorie">Kategorie</label>
                        <select class="form-control" name="kategorie" id="kategorie" name="kategorie">
                            <?php foreach ($results as $rowCategory): ?> 
                                <option <?php if($row['kategorie']==$rowCategory['id']) { ?>selected<?php } ?> value="<?php echo $rowCategory['id'] ?>"><?php echo $rowCategory['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                   
                    <button type="submit" class="btn btn-primary mt-4">Aktualisieren</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>