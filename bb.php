<?php
require 'dataBase/db_connect.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <div class="main-secton">
        <div class="add-section">
            <form action="dataBase/tache.php" method="post">
                <input type="text" name="titre" id="titre">
                <button type="submit" name="ajouter">Ajouter &nbsp; <span>&#43</span></button>
            </form>
        </div>
                <?php
            $tache = $bddPDO->query("SELECT FROM * tache ORDER ID DESC");
        ?>
        <div class="show-to-do-section">
                    <?php
            if($tache->rowCount()===0) ?>

</body>
</html>