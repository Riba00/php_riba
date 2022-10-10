<?php
require 'app/helpers.php';

require 'app/Tasca.php';

//$tasca = new Tasca(3,'Fer lo dinar','para tots',0);

//var_dump($tasca);

$user = 'debian-sys-maint';
$pass = 'PboPRA0ZQKegJPpP';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs',$user,$pass);
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
