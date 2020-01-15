<?php

require_once __DIR__.'/Customer.php';
require_once __DIR__.'/Book.php';


$first_customer = new Customer(5,"chamara","ccweerasinghe1994@gmail.com","weerasinghe");
$second_customer = new Customer(null,"kasun","kbewf@gmail.com","skdbwdg");
//$third_customer = new Customer(null,"aef","kbewf@gmail.com","skdbwdg");


var_dump($first_customer::getLastId());
var_dump($second_customer::getLastId());
//var_dump($third_customer::getLastId());

