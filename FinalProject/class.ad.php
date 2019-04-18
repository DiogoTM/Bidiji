<?php 

class Ad
{
    private $adId;
    private $userId;
    private $subcategoryId;
    private $startDate;
    private $endDate;
    /**
     * @return mixed
     */
    public function getAdId()
    {
        return $this->adId;
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
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * @return mixed
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return mixed
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param mixed $adId
     */
    public function setAdId($adId)
    {
        $this->adId = $adId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @param mixed $subcategoryId
     */
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;
    }

    /**
     * @param mixed $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @param mixed $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    
    
    
}


?>