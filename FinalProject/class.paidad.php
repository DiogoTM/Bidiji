<?php 

class PaidAd extends Ad{
    private $paidAdId;
    private $imageQuantity;
    private $totalCost;
    
    function __construct($userId, $subcategoryId, $endDate, $totalCost, $imageQuantity){
        
        parent::__construct($userId, $subcategoryId,$endDate);
        $this->imageQuantity = $imageQuantiy;
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
    public function getRate()
    {
        return $this->rate;
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
     * @param mixed $rate
     */
    public function setRate($rate)
    {
        $this->rate = $rate;
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

    public function register($connectionId, $ad)
    {
        
        try
        {
            $stmt = $connectionId->prepare("INSERT INTO paidad (adId, imageQuantity, totalCost)
              VALUES(:adId, :imageQuantity, :totalCost)");
            
            $stmt->bindparam(":adId", $adId);
            $stmt->bindparam(":imageQuantity", $adId);
            $stmt->bindparam(":totalCost", $adId);           
            
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