<?php

function saludar()
{

    $name = $_GET['name'];
    $surname = $_GET['cognom'];

    return "Hola $name $surname!";

}

function dd($xivato)
{
    var_dump($xivato);
    die();
}


