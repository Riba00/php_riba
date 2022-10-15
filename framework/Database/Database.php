<?php

namespace framework\Database;

use App\Models\Tasca;
use  PDO;

class Database
{
    public $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->connection = new Connection($config);
    }


    function selectAll($table)
    {
        $dbh = $this->connection->connectDB();
        $statement = $dbh->prepare("SELECT * FROM $table;");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS,Tasca::class);

    }
}