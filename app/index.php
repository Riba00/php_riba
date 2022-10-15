<?php
require 'app/helpers.php';

require 'app/Tasca.php';

require 'config.php';

//$tasca = new Tasca(3,'Fer lo dinar','para tots',0);

//var_dump($tasca);


try {
    $dbh = new PDO(
        $config['database']['databasetype'] . ":host=" . $config['database']['host'] . ";dbname=" . $config['database']['name'],
        $config['database']['user'],
        $config['database']['password']);
} catch (\Exception $e) {
    echo 'Error amb la connexió a la BD';
}

$statement = $dbh->prepare('SELECT * FROM tasques;');

$statement->execute();

$tasques = $statement->fetchAll(PDO::FETCH_CLASS, 'Tasca');


// QUERY STRING
//var_dump($_GET['name']);
//$name = 'Riba';


//$greeting = 'Hola ' . $_GET['name'] . ' '. $_GET['cognom'] . '!';

//API

$greeting = saludar();
