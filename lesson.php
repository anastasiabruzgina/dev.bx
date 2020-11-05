<?php
//main

require_once("./read.php");

$array=readFromConsole();
$result=array_sum($array);
echo 'Сумма элементов: '.$result;