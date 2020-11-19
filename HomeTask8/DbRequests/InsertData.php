<?php

namespace DbRequests;

use DbConnect\Connect;

class InsertData extends Connect
{
    public function insert($name, $age, $is_active)
    {
        $strRequest = 'INSERT INTO usersdata (Name, Age, Is_active ) VALUES ('.'\''. $name .'\',' .  $age  . ',' . $is_active . ')';

        return $this->dbConnect()->query($strRequest);
    }
}