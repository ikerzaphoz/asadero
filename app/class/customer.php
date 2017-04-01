<?php

Class Customer{

    private $id;
    private $email;
    private $name;
    private $surname;
    private $phone;
    private $age;
    private $pass;
    private $type;

    public function __construct($id=null, $email=null, $name=null, $surname=null, $phone=null, $age=null, $pass=null, $type=null)
    {
        $this->id = $id;
        $this->email = $email;
        $this->name = $name;
        $this->surname = $surname;
        $this->phone = $phone;
        $this->age = $age;
        $this->pass = $pass;
        $this->type = $type;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    private function getCustomer($id){
        $bd = new Db();
        $sql = "SELECT * FROM customers WHERE id = '$id'";
        $stmt = $bd->ejecutar($sql);
        $result = $bd->obtener_fila($stmt,0);
        $cs = new Customer($result['id'],$result['email'],$result['name'],$result['surname'],$result['phone'],$result['age'],$result['pass'],$result['type']);
        return $cs;
    }

    public function addCustomer($email, $name, $surname, $phone, $age, $pass, $type){
        $bd = new Db();
        $sql = "INSERT INTO customers (email, name, surname, phone, age, pass, type) VALUES ('$email','$name', '$surname', $phone,$age,'$pass', $type)";
        $bd->ejecutar($sql);

    }

    public function login_customer($email, $pass){
        $bd = new Db();
        $sql = "SELECT id FROM customers WHERE email = '$email' AND pass = '$pass'";
        $stmt = $bd->ejecutar($sql);
        $result = $bd->obtener_fila($stmt,0);
        return $this->getCustomer($result['id']);
    }

}

?>