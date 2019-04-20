<?php 

class Member extends User
{
    private $memberId;
    
       
    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }    
    
    
    function __construct($name, $address, $city, $state, $phone, $email, $password)
    {
        parent::__construct($name, $address, $city, $state, $phone, $email, $password);
        
    }
    
    public function register($connectionId){
        parent::register($connectionId);
    }
    
    public function registerMember($connectionId, $user)
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
                $stmt = $connectionId->prepare("INSERT INTO member (userId) VALUES(:userId)");
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