<?php

namespace framework\Database;

use PDO;

class Connection
{

    public static function make($config)
    {
            return new PDO(
                $config['databasetype'] . ":host=" . $config['host'] . ";dbname=" . $config['name'],
                $config['user'],
                $config['password']);
    }
}