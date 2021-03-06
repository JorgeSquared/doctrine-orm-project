<?php

error_reporting(-1);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

use App\Service\DatabaseFactory;
use App\Service\Templating;
use DI\Container;
use Slim\Factory\AppFactory;

require('../vendor/autoload.php');

// register services
$container = new Container();

$container->set('db', function() {
	return DatabaseFactory::create();
});

$container->set('templating', function() {
    return new Templating;
});

AppFactory::setContainer($container);

// initialise application
$app = AppFactory::create();

// define page routes
$app->get('/', '\App\Controller\DefaultController:homepage');
$app->get('/admin', '\App\Controller\AdminController:view');
$app->any('/admin/create', '\App\Controller\AdminController:create');
$app->any('/admin/{id}', '\App\Controller\AdminController:edit');
$app->get('/article/{slug}', '\App\Controller\ArticleController:view');
$app->get('/author/{id}', '\App\Controller\AuthorController:author');

// finish
$app->run();
