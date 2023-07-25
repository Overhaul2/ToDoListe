<?php
    require_once 'db_connect.php';
if(isset($_GET["ID"])){
    $resulte = $_GET['ID'];

        $requette="DELETE FROM `tache` WHERE `tache`.`ID` ='".$resulte . "'";

        $statment=$bddPDO->prepare($requette);
        $statment->bindParam(':ID', $resulte);
        $statment->execute();
    
        $rowCount=$statment->rowCount();
        }else{
            die("Aucune tâche a supprimer");
        } header("location:../index.php");
        $bddPDO= null;

?>           