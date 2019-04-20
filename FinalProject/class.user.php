<?php 

class User
{
    private $userId;
    private $name;
    private $address;
    private $city;
    private $state;
    private $phone;
    private $email;
    private $password;
  

    function __construct($name, $address, $city, $state, $phone, $email, $password){
     
        $this->name = $name;
        $this->address = $address;
        $this->city= $city;
        $this->state= $state;
        $this->phone= $phone;
        $this->email=$email;
        $this->password= $password;
    
    }   
    
    
    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @param mixed $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

   
    
    public function register($connectionId)
    {
  
       try
       {              
           $stmt = $connectionId->prepare("INSERT INTO user(name,address,city, state, phone, email, password) 
              VALUES(:name, :address, :city, :state, :phone, :email, :password)");
              
           $stmt->bindparam(":name", $this->name);
           $stmt->bindparam(":address", $this->address);
           $stmt->bindparam(":city", $this->city);
           $stmt->bindparam(":state", $this->state);
           $stmt->bindparam(":phone", $this->phone);
           $stmt->bindparam(":email", $this->email);
           $stmt->bindparam(":password", md5($this->password));               
           $stmt->execute(); 
   
           return $stmt; 
       }
       catch(PDOException $e)
       {
           echo $e->getMessage();
       }    
    }
    
}

?>