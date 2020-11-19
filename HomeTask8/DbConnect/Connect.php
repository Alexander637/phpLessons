<?php

namespace DbConnect;

use PDO;

abstract class Connect
{

    protected function dbConnect()
    {
        $dbConnect = new PDO('mysql:host=127.0.0.1;dbname=hometask8', 'root','', [PDO::ATTR_PERSISTENT => true]);

        return $dbConnect;
    }


}