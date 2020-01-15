<?php

class Book
{
//    properties are like variables

    public $isbn;
    public $title;
    public $author;
    public $available;

//    methods are like functions

    /**
     * Book constructor.
     * @param $isbn
     * @param $title
     * @param $author
     * @param $available
     */
    
    public function __construct($isbn, $title, $author, $available)
    {
        $this->isbn = $isbn;
        $this->title = $title;
        $this->author = $author;
        $this->available = $available;
    }

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
$harry_potter = new Book(984586349345696,"Harry potter and the magicians","harry jungle",0);


if ($harry_potter->getCopy()) {
    echo "Here is your copy of " . $harry_potter->title . '<br>';
} else {
    echo "Sorry its gone" . '<br>';
}

var_dump($harry_potter);
