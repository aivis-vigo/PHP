<?php declare(strict_types=1);

require_once "Application.php";
require_once "VideoStore.php";
require_once "Video.php";

$videoStore = new VideoStore();
$app = new Application($videoStore);
$app->run();