<?php

namespace BoookStore\Domain;
//private access is only granted inside the class

//protected access is only granted by the children

// public access by the outside


use BookStore\Domain\Person;

require_once __DIR__.'/Person.php';

class Customer extends Person
{
    private static $lastId = 0;
    private $id;
//    private $customer_name;
//    private $email;
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
        parent::__construct( $customer_name, $email);
//        $this->id = $id;
        if ($id == null) {
            $this->id = ++self::$lastId;
        } else {
            $this->$id = $id;
            if ($id > self::$lastId) {
                self::$lastId = $id;
            }
        }
        $this->customer_name = $customer_name;
        $this->email = $email;
        $this->serName = $serName;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getCustomerName()
    {
        return $this->customer_name;
    }

    /**
     * @param mixed $customer_name
     */
    public function setCustomerName($customer_name)
    {
        $this->customer_name = $customer_name;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getSerName()
    {
        return $this->serName;
    }

    /**
     * @param mixed $serName
     */
    public function setSerName($serName)
    {
        $this->serName = $serName;
    }

    /**
     * @return int
     */
    public static function getLastId()
    {
        return self::$lastId;
    }


}