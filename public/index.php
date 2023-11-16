<?php
define("BASE_PATH", dirname(__DIR__));

require_once BASE_PATH . '/vendor/autoload.php';


use Ryxo\Route;
use Ryxo\Request;
use Ryxo\Response;
use App\controllers\SiteController;

$app = new Route();

// $app->get('/', 'index');
$app->get('/', [SiteController::class, 'home']);
$app->get("/blog", function () {
    echo "Hello";
});
$app->get("/blog/{BlogId}", function (Request $req, Response $res, $params = []) {
    echo "Blogs";
});
$app->get("/{sender}/to/{receiver}", function (Request $req, Response $res, $params = []) {
    echo "Chat app feature";
});
$app->run();
