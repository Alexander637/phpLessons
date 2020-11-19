<?php


namespace DbRequests;

use DbConnect\Connect;

class SelectData extends Connect
{
    private $strSelect = 'SELECT * FROM usersdata';
    private $strCount = 'SELECT count(*) FROM usersdata';

    public function select($where = null, $orderBy = null)
    {
        if (!is_null($where) && is_string($where)) {
            $this->strSelect .= ' WHERE ' . $where;
        }
        if(!is_null($orderBy) && is_string($orderBy)) {
            $this->strSelect .= ' ORDER BY ' . $orderBy;
        }

        foreach ($this->dbConnect()->query($this->strSelect) as $item) {
            printf('id: %s, name: %s, age: %s, is active: %s', $item['Id'], $item['Name'], $item['Age'], $item['Is_active'] );
            echo '<br>';
        }
    }

    public function count($where = null)
    {
        if (!is_null($where)) {
            $this->strCount .= ' WHERE ' . $where;
        }

        return $this->dbConnect()->query($this->strCount)->fetch()['count(*)'];
    }
}