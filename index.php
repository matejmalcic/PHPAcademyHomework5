<?php

require 'Classes/AbstractClass.php';
require 'Classes/Folder1/ClassName1.php';
require 'Classes/Folder2/ClassName2.php';
require 'Classes/Folder3/ClassName3.php';
require 'Classes/App.php';

use Classes\Folder1\ClassName1 as Class1;
use Classes\Folder2\ClassName2 as Class2;
use Classes\Folder3\ClassName3 as Class3;
use Classes\App;


$array = [
    'Classes\Folder1\ClassName1',
    'Classes\Folder2\ClassName2',
    'Classes\Folder3\ClassName3'
];
$class = $array[array_rand($array)];

$c = new $class;
var_dump($c);

echo '<hr>';

$a =new App;
echo $a->randomClass($c);