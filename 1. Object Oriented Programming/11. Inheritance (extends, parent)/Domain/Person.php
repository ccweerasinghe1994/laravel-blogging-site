<?php

namespace BookStore\Domain;

class Person {
    protected $customer_name;
    protected $email;

    /**
 * Person constructor.
 * @param $customer_name
 * @param $email
 */public function __construct($customer_name, $email)
{
    $this->customer_name = $customer_name;
    $this->email = $email;
}

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

}