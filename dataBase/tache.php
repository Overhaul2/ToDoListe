<?php
    require_once 'db_connect.php';
if(isset($_POST["ajouter"])){
    $titre = $_POST['titre'];}
    if(empty ($titre)){
        header("location:../index.php?mess=erreur");
    }else {
        $requette= $bddPDO->prepare("INSERT INTO `tache`(`titre`) VALUES (:titre)");
        $resulte=$requette->bindValue(':titre', $titre);
        $resulte=$requette->execute();
    
        if($resulte){
            header("location:../index.php?mess=succès");
        }else{
            header("location:../index.php");
        }
        $bddPDO= null;
        exit();
    }
?>