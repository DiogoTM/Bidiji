<?php 

class PaidAd extends Ad{
    private $paidAdId;
    private $rate;
    private $imageQuantity;
    private $totalCost;
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

    
    
}

?>