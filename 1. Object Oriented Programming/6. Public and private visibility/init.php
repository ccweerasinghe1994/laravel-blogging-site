<?php

require_once __DIR__.'/Customer.php';
require_once __DIR__.'/Book.php';


$harry_potter = new Book(984586349345696,"Harry potter and the magicians","harry jungle",10);
$first_customer = new Customer(12131313,"chamara","ccweerasinghe1994@gmail.com","weerasinghe");
//this can be accessed because its public
var_dump($harry_potter->title);

// var_dump($first_customer->id); cannot access because because variables are private