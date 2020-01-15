<?php
//private access is only granted inside the class

//protected access is only granted by the children

// public access by the outside


class Customer {
    private $id;
    private $customer_name;
    private $email;
    private $serName;

    /**
     * Customer constructor.
     * @param $id
     * @param $customer_name
     * @param $email
     * @param $serName
     */
    public function __construct($id, $customer_name, $email, $serName)
    {
        $this->id = $id;
        $this->customer_name = $customer_name;
        $this->email = $email;
        $this->serName = $serName;
    }


}