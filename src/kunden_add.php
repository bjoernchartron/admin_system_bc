<?php 

require 'include_database.php';

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
                <h1>Kunden anlegen</h1>
                <form class="mt-4" action="kunden_add_thanks.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="z. B. BASF">
                    </div>

                    
                    <div class="form-group">
                        <label for="rechtsform">Rechtsform</label>
                        <input type="text" class="form-control" id="rechtsform" name="rechtsform" placeholder="z. B. GmbH">
                    </div>

                    <!--
                    <div class="form-group">
                    <label for="category">Rechtsform</label>
                        <select class="form-control" id="category">
                            <option>Einzelunternehmen</option>
                            <option>Stille Gesellschaft</option>
                            <option>OHG</option>
                            <option>KG</option>
                            <option>GbR</option>
                            <option>AG</option>
                            <option>KGaA</option>
                            <option>GmbH</option>
                            <option>eG</option>
                        </select>
                    </div>
                    -->

                     <div class="form-group">
                        <label for="unterzeile">Unterzeile</label>
                        <input type="text" class="form-control" id="unterzeile" name="unterzeile" placeholder="z. B. The Chemical Company">
                    </div>

                     <div class="form-group">
                        <label for="rechtsform">Kurztext</label>
                        <input type="text" class="form-control" id="kurztext" name="kurztext" placeholder="z. B. Chemie-Konzern und Global Player">
                    </div>

                    <div class="form-group">
                        <label for="profil">Profil</label>
                        <textarea class="form-control" id="profil" rows="6" name="profil" placeholder="z. B. BASF ist der nach Umsatz und Marktkapitalisierung derzeit weltweit größte Chemiekonzern..."></textarea>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="status" value="true" id="status">
                        <label class="form-check-label" for="status">
                            Aktivieren
                        </label>
                    </div> 

                    <div class="form-group">
                        <label for="category">Kategorie</label>
                        <select class="form-control" name="kategorie" id="kategorie">
                            <?php foreach ($results as $row): ?> 
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
               
                    

                    <button type="submit" class="btn btn-primary mt-4">Hinzufügen</button>
                </form>
            </div>
        </div>
    </div>

    <?php require 'include_body_end.php'; ?>
  </body>
</html>