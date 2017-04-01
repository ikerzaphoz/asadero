<?php

Class Customer{

    private $email;
    private $name;
    private $surname;
    private $phone;
    private $age;
    private $pass;

    public function __construct($email=null, $name=null, $surname=null, $phone=null, $age=null, $pass=null)
    {
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->age = $age;
        $this->pass = $pass;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getPass()
    {
        return $this->pass;
    }

    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    public function addCustomer($email, $name, $surname, $phone, $age, $pass){
        $bd = new Db();
        $sql = "INSERT INTO customers (email, name, surname, phone, age, pass) VALUES ('$email','$name', '$surname', $phone,$age,'$pass')";
        $bd->ejecutar($sql);

    }


}

?>