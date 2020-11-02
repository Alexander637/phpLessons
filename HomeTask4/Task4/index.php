
<?php

use ForThrow\EmptyStringException;
use ForThrow\InvalidInputTypeException;
use FormProcessing\Processing;

require_once 'vendor/autoload.php';

try {
    require_once 'View/PostInfo.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = htmlentities($_POST['name']);
        $age = htmlentities($_POST['age']);

        $processing = new Processing($name, $age);

        include_once 'View/ShowInfo.php';
    }

}catch (EmptyStringException $exception) {
    echo $exception->getMessage();
}catch (InvalidInputTypeException $exception) {
    echo $exception->getMessage() . $exception->getAge();
}


