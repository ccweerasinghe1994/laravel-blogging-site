<?php
class Book{
//    properties
    public $isbn;
    public $title;
    public $author;
    public $available;

}
//instantiate
$harry_potter = new Book();
$harry_potter->isbn =984586349345696;
$harry_potter->title = "Harry potter and the magicians";
$harry_potter->author = "harry jungle";
$harry_potter->available =12;

var_dump($harry_potter);