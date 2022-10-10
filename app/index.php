<?php
require 'app/helpers.php';

require 'app/Tasca.php';

require 'config.php';

//$tasca = new Tasca(3,'Fer lo dinar','para tots',0);

//var_dump($tasca);



$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";



try {
    $dbh = new PDO($dsn,$user,$pass);
}catch (\Exception $e){
    echo 'Error amb la connexió a la BD';
}

$statement = $dbh->prepare('SELECT * FROM tasques;');

$statement->execute();

$tasques = $statement->fetchAll(PDO::FETCH_CLASS,'Tasca');






// QUERY STRING
//var_dump($_GET['name']);
//$name = 'Riba';




//$greeting = 'Hola ' . $_GET['name'] . ' '. $_GET['cognom'] . '!';

//API

$greeting = saludar();
