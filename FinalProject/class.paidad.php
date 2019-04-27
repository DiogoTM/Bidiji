<?php 

class PaidAd extends Ad{
    
    private $paidAdId;
    private $imageQuantity;
    private $totalCost;
    
    function __construct($userId, $subcategoryId, $endDate, $totalCost, $imageQuantity){
        
        parent::__construct($userId, $subcategoryId,$endDate);
        $this->imageQuantity = $imageQuantity;
        $this->totalCost = $totalCost;
      
    }
    
    
    /**
     * @return mixed
     */
    public function getPaidAdId()
    {
        return $this->paidAdId;
    }

    /**
     * @return mixed
     */
    public function getImageQuantity()
    {
        return $this->imageQuantity;
    }

    /**
     * @return mixed
     */
    public function getTotalCost()
    {
        return $this->totalCost;
    }

    /**
     * @param mixed $paidAdId
     */
    public function setPaidAdId($paidAdId)
    {
        $this->paidAdId = $paidAdId;
    }

    /**
     * @param mixed $imageQuantity
     */
    public function setImageQuantity($imageQuantity)
    {
        $this->imageQuantity = $imageQuantity;
    }

    /**
     * @param mixed $totalCost
     */
    public function setTotalCost($totalCost)
    {
        $this->totalCost = $totalCost;
    }
    
    public function register($connectionId, $userId){
        parent::register($connectionId, $userId);
    }
    
   
    public function registerPaidAd($connectionId, $myAnnounce)
    {
        $adId =  $myAnnounce->getAdId();
        $img = $myAnnounce->getImageQuantity();
        $cost = $myAnnounce->getTotalCost();
        

        try
        
        {                       
            $stmt = $connectionId->prepare("  INSERT INTO `paidad` (`paidadId`, `adid`, `imageQuantity`, `totalCost`) VALUES (NULL, :adid, :imageQuantity, :totalCost)");
            
            $stmt->bindparam(":adid", $adId);
            $stmt->bindparam(":imageQuantity", $img);
            $stmt->bindparam(":totalCost", $cost);
            
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