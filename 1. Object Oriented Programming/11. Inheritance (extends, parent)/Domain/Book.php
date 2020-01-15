<?php

namespace BoookStore\Domain;

class Book{
    public $isbn;
    public $title;
    public $author;
    public $available;

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

}
