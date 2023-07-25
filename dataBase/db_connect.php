<?php
$bddPDO = new PDO('mysql:host=localhost;dbname=todoliste', 'root', "");
$bddPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>