<?php

use DbRequests\InsertData;
use DbRequests\SelectData;
use DbRequests\UpdateData;
use DbRequests\DeleteData;

require_once 'vendor/autoload.php';

try {

    $insert = new InsertData();
    $select = new SelectData();
    $update = new UpdateData();
    $delete = new DeleteData();
/*
    $insert->insert('Sara', 50, 0);

    $select->select();
    $select->select('Is_active = 1');
    $select->select('Age >= 30');
    $select->select('Name LIKE \'V%\'');
    $select->select('Age = (SELECT max(Age) FROM usersdata)');
    $select->select(null, 'Age ASC');
    $select->select(null, 'Name ASC');

    printf($select->count());
    printf($select->count('Is_active = 1'));
    printf($select->count('Age >= 25 AND Is_active = 1'));

    $update->updateData(2, ['Age' => 45]);
    $update->updateData(1, ['Name'=>'Peter']);
    $update->updateData(3, ['Is_active'=> 0]);
    $delete->delete();
*/
}catch (PDOException $exception) {
    $exception->getMessage();
}



