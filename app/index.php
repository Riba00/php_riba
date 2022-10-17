<?php

use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

//dd($app);

//DRY -> Dont Repeat Yourself
//WET -> Write Everything Twice


$database = new Database($config);
$tasques = $database->selectAll('tasques');


$greeting = saludar();
