<?php 

class Employee extends User{
    
    private $empId;
    /**
     * @return mixed
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * @param mixed $empId
     */
    public function setEmpId($empId)
    {
        $this->empId = $empId;
    }

    
    
    function __construct($name, $address, $city, $state, $phone, $email, $password)
    {
        parent::__construct($name, $address, $city, $state, $phone, $email, $password);
        
    }
    
    public function register($connectionId){
        parent::register($connectionId);
    }
    
    public function registerEmp($connectionId, $user)
    {
        try
        {
            $stmt = $connectionId->prepare("SELECT * FROM user WHERE email=:email");
            $stmt->execute(array(':email'=>$user->getEmail()));
            $found=$stmt->fetch(PDO::FETCH_ASSOC);
            echo "ok";
            
            if($stmt->rowCount() > 0)
            {
                echo "ok2";
                $stmt = $connectionId->prepare("INSERT INTO employee (userId) VALUES(:userId)");
                $stmt->bindparam(":userId", $found['userId']);
                $stmt->execute();
                return $stmt;
            }
            
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
}

?>