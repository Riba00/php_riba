<?php

namespace Framework;

class App{

    private $container = [];
    //API
    //BIND -> Setter -> Afegir un objecte nou a la meva app

    //getters i setters

    public function bind($key, $value)
    {
        $this->container[$key] = $value;
    }

    public function get($key)
    {
        if (!array_key_exists($key, $this->container)) {
            throw new Exception("No {$key} is bound in the container.");
        }

        return $this->container[$key];
    }
}