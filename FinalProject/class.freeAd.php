<?php 

class FreeAd extends Ad
{
    private $freeAdId;
    
    function __construct($userId, $subcategoryId){
        
        parent::__construct($userId, $subcategoryId);
    }
    
    /**
     * @return mixed
     */
    public function getFreeAdId()
    {
        return $this->freeAdId;
    }

    /**
     * @param mixed $freeAdId
     */
    public function setFreeAdId($freeAdId)
    {
        $this->freeAdId = $freeAdId;
    }
    
    public function register($connectionId, $adId)
    {
        
        try
        {
            $stmt = $connectionId->prepare("INSERT INTO freead (adId)
              VALUES(:adId)");
            
            $stmt->bindparam(":adId", $adId);
           
            $stmt->execute();
            
            return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    
    public function getInfo($connectionId, $adId)
    {
        
        try
        {       
            $stmt = $connectionId->prepare("SELECT * FROM freead WHERE adId=:adId LIMIT 1");
            $stmt->execute(array(':adId'=>$adId));
            $found=$stmt->fetch(PDO::FETCH_ASSOC);
            
            if($stmt->rowCount() > 0)
            {
                $_SESSION['userLogged'] = $found['email'];
                $_SESSION['success'] = "You are now logged in";
                header('location: index.php');
                return true;
            }
            echo "not nice job dude";
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
    }
    
    
}

?>