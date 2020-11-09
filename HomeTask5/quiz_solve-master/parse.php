<?php

require_once __DIR__ . '/vendor/autoload.php';

use QuizProcessing\DataParser;

use QuizProcessing\Struct\Teacher;
use QuizProcessing\Struct\User;
use QuizProcessing\Struct\Guest;

$dataParser = new DataParser(__DIR__ . '/data/data.json');
$dataParser->process();


