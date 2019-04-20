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
    
    
}

?>