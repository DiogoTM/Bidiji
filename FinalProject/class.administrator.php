<?php 

class Administrator extends User{
    
    private $adminId;  
    
    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }
    
    
    function __construct($name, $address, $city, $state, $phone, $email, $password)
    {
        parent::__construct($name, $address, $city, $state, $phone, $email, $password);   
       
    }
    
    public function register($connectionId){
        parent::register($connectionId);
    }
        
    public function registerAdm($connectionId, $user)
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
            $stmt = $connectionId->prepare("INSERT INTO administrator (userId) VALUES(:userId)");
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