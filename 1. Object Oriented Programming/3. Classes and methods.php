<?php

class Book
{
//    properties are like variables

    public $isbn;
    public $title;
    public $author;
    public $available;

//    methods are like functions
    public function printableFunction()
    {
        $result = $this->title . "by" . $this->author;
        if (!$this->available) {
            $result .= "Not Available";
        }
        return $result;

    }
    
}

//instantiate
$harry_potter = new Book();
$harry_potter->isbn = 984586349345696;
$harry_potter->title = "Harry potter and the magicians";
$harry_potter->author = "harry jungle";
$harry_potter->available = 12;

var_dump($harry_potter);