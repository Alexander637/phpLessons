<?php

namespace DbRequests;

use DbConnect\Connect;

class DeleteData extends Connect
{
    public function delete()
    {
        $strDelete = 'DELETE FROM usersdata';

        return $this->dbConnect()->query($strDelete);
    }

}