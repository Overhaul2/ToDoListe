<?php
require 'dataBase/db_connect.php'
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>To-Do-Liste</title>
</head>

<body>
    <div class="main-secton">
        <div class="add-section">
            <form action="dataBase/tache.php" method="post">
            <?php if(isset($_GET['mess']) && $_GET['mess']=='erreur'){ ?>
                <input type="text" name="titre" id="titre" placeholder="Ce champ est Obligatoire" style="border-color: #ff6666">
                <button type="submit" name="ajouter">Ajouter &nbsp; <span>&#43</span></button>

                <?php }else{ ?>
                <input type="text" name="titre" id="titre" placeholder="Que voulez vous faire ?">
                <button type="submit" name="ajouter">Ajouter &nbsp; <span>&#43</span></button>
                <?php } ?>
            </form>
        </div>
        <?php
        $requette=$bddPDO->prepare("SELECT * FROM tache ORDER BY ID DESC");
        $requette->execute();
        ?>

        <div class="show-to-do-section">
            <?php
            if ($requette->rowCount() <= 0) { ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="img/social-network.png" width="100%">
                    </div>
                </div>
            <?php  } ?>

            <?php
                while($tache=$requette->fetch(PDO::FETCH_ASSOC)){
            ?>            
            <div class="todo-item">
                <span ID="<?php echo $tache['ID']?>"
                    class="remove-to-do">
                    <?php echo "<a href='dataBase/supp.php?ID= ".$tache['ID'] ."' >&#x1F5D1</a>"?></span>
                    <?php if($tache['etat']){?>
                        <input type="checkbox" name="etat" id="etat"
                            class="check-box" checked/>
                        <h2 class="checked"><?php echo $tache['titre']?></h2>
                    <?php }else{ ?>
                        <input type="checkbox" name="etat" id="etat"
                            class="check-box"/>
                        <h2><?php echo $tache['titre']?></h2>
                        <?php } ?>
                    <small>created :<?php echo $tache['date']?></small>
            </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>