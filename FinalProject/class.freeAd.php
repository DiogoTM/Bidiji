<?php 

class FreeAd extends Ad
{
    private $freeAdId;
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

    
    
}

?>