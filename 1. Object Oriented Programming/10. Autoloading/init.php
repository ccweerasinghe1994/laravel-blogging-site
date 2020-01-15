<?php


use BoookStore\Domain\Customer;
use BoookStore\Domain\Book as MyBook;

// auto loader function to auto load classes
function autoLoader($className)
{
    $lastSlash = strpos($className, '\\') + 1;
    $className = substr($className, $lastSlash);
    $directory = str_replace('\\', '/', $className);
    $fileName = __DIR__ . '/' . $directory . 'php';
    require_once $fileName;
}

spl_autoload_register('autoLoader');
//require_once __DIR__ . '/Domain/Customer.php';
//require_once __DIR__ . '/Domain/Book.php';


$first_customer = new Customer(5, "chamara", "ccweerasinghe1994@gmail.com", "weerasinghe");
$second_customer = new Customer(null, "kasun", "kbewf@gmail.com", "skdbwdg");
//$third_customer = new Customer(null,"aef","kbewf@gmail.com","skdbwdg");


var_dump($first_customer::getLastId());
var_dump($second_customer::getLastId());
//var_dump($third_customer::getLastId());

