<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
           'twig.path' => __DIR__.'/../views'
       ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');

    });

    $app->get("/scrabble_result", function() use($app) {
        $my_Scrabble = new Scrabble;
        $scrabble_phrase = $my_Scrabble->getScore($_GET['input_word']);
        return $app['twig']->render('scrabble_score.html.twig', array('result' => $scrabble_phrase));
    });

    return $app;

 ?>
