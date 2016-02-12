<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    session_start();
    
		if (empty($_SESSION['list_of_contacts'])) {
		    $_SESSION['list_of_contacts'] = array();
		}


    return $app;
?>
