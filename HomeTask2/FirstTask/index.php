<?php

use FirstTask\Roles\Admin;
use FirstTask\Roles\Viewer;
use FirstTask\Roles\Moderator;

require_once '../vendor/autoload.php';

$admin = new Admin('Vasia','0675328816');

echo $admin->getRole();
echo '<br>';
echo $admin->getName();
echo '<br>';
echo $admin->getPhoneNumber();
echo '<br>';
echo '<br>';


$viewer = new Viewer('Sasha' , '0995444123');

echo $viewer->getRole();
echo '<br>';
echo $viewer->getName();
echo '<br>';
echo $viewer->getPhoneNumber();
echo '<br>';
echo '<br>';


$moderator = new Moderator('Masha' , '0994332775');

echo $moderator->getRole();
echo '<br>';
echo $moderator->getName();
echo '<br>';
echo $moderator->getPhoneNumber();
echo '<br>';
echo '<br>';

