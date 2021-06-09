<?php
    if(isset($_POST['envoyer'])){

        if(isset($_POST['nom'] ,$_POST['prenom'] ,$_POST['message'])){

            extract($_POST);

            echo $nom." ".$prenom." ".$message;

        }
    }

    require('views/index.view.php');

