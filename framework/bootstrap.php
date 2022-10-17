<?php

use Framework\App;

$app = new App();

//Laravel Service Providers
$app->bind('config',require 'config.php');

