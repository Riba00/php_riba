<?php

use Framework\App;


require 'app/helpers.php';


//DRY -> Dont Repeat Yourself
//WET -> Write Everything Twice

$tasques = App::get('database')->selectAll('tasques');


//$database = new Database(App::get('config')['database']);


$greeting = saludar();
