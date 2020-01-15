<?php




use BoookStore\Domain\Customer as myCustomer;
use BoookStore\Domain\Book as MyBook;

require_once __DIR__.'/Domain/Customer.php';
require_once __DIR__.'/Domain/Book.php';


$first_customer = new myCustomer(5,"chamara","ccweerasinghe1994@gmail.com","weerasinghe");
$second_customer = new myCustomer(null,"kasun","kbewf@gmail.com","skdbwdg");
//$third_customer = new Customer(null,"aef","kbewf@gmail.com","skdbwdg");


var_dump($first_customer::getLastId());
var_dump($second_customer::getLastId());
//var_dump($third_customer::getLastId());

