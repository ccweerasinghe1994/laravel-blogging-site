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

    public function getCopy()
    {
        if ($this->available < 1) {
            return false;
        } else {
            $this->available--;
            return true;
        }
    }
}

//instantiate
$harry_potter = new Book();
$harry_potter->isbn = 984586349345696;
$harry_potter->title = "Harry potter and the magicians";
$harry_potter->author = "harry jungle";
$harry_potter->available = 0;

if ($harry_potter->getCopy()){
    echo "Here is your copy of ".$harry_potter->title.'<br>';
}else{
    echo "Sorry its gone".'<br>';
}

var_dump($harry_potter);