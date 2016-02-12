<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Contact.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
		));


    session_start();

		if (empty($_SESSION['list_of_contacts'])) {
		    $_SESSION['list_of_contacts'] = array();
		}

		$app->get("/", function() use ($app) {
				return $app['twig']->render('list.html.twig');
		});


    return $app;
?>
