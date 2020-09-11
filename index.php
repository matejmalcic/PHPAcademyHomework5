<?php

require 'Classes/AbstractClass.php';
require 'Classes/Folder1/ClassName1.php';
require 'Classes/Folder1/ClassName2.php';
require 'Classes/Folder2/ClassName1.php';
require 'Classes/Folder2/ClassName2.php';
require 'Classes/Folder3/ClassName1.php';
require 'Classes/Folder3/ClassName2.php';
require 'Classes/App.php';
require 'Classes/Extra/Prefix.php';

use Classes\Folder1\ClassName1 as Class11;
use Classes\Folder1\ClassName2 as Class12;
use Classes\Folder2\ClassName1 as Class21;
use Classes\Folder2\ClassName2 as Class22;
use Classes\Folder3\ClassName1 as Class31;
use Classes\Folder3\ClassName2 as Class32;
use Classes\App;

$array = [
    'Classes\Folder1\ClassName1',
    'Classes\Folder1\ClassName2',
    'Classes\Folder2\ClassName1',
    'Classes\Folder2\ClassName2',
    'Classes\Folder3\ClassName1',
    'Classes\Folder3\ClassName2'
];
$class = $array[array_rand($array)];

$object = new $class;

$a = new App();
echo $a->start($object);