<?php


namespace DbRequests;


use DbConnect\Connect;

class UpdateData extends Connect
{
    private $strUpdate = 'UPDATE usersdata SET ';

    public function updateData($id, array $columns)
    {
        $str = '';

        foreach ($columns as $column => $value) {
            $str .= $column . ' = ' . '\'' . $value . '\'';
        }

        $this->strUpdate .=  $str . ' WHERE Id = ' . $id;

        return $this->dbConnect()->query($this->strUpdate);
    }


}