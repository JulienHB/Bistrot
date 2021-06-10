<?php
include_once 'model/employee.php';
include_once 'model/cooker.php';
include_once 'model/waiter.php';



$test =new Cook;

$test->setNames('Gr0', 'Lou');

$test->isAtWork();
var_dump($test);
$test->isNotAtWork();