<?php
    $type = (isset($_GET['type']) && !empty($_GET['type'])) ? $_GET['type'] : null;

    if ($type == 'automobile')
    {
        include_once 'assurance/automobile.php';
    }
    elseif ($type == 'sante'){
        include_once 'assurance/sante.php';
    }
    elseif ($type == 'voyage'){
        include_once 'assurance/voyage.php';
    }
    else{
        header("Location:services.php");
        die();
    }
