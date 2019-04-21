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

    function __construct($userId, $subcategoryId,$endDate){
        
       $this->userId = $userId;
       $this->subcategoryId = $subcategoryId;
       $this->startDate = date('Y-m-d');
       $this->endDate = $endDate;
       
        
    }   

    public function register($connectionId,$userId)
    {
        
        try
        {
            $stmt = $connectionId->prepare("INSERT INTO ad (userId,subcategoryId,startDate, endDate)
              VALUES(:userId, :subcategoryId, :startDate, :endDate)");
            
            $stmt->bindparam(":userId", $userId);
            $stmt->bindparam(":subcategoryId", $this->subcategoryId);
            $stmt->bindparam(":startDate", $this->startDate);
            $stmt->bindparam(":endDate", $this->endDate);
            
            $stmt->execute();
            $this->adId = $connectionId->lastInsertId();
      
             return $stmt;
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        
        
    }
    
    
    
}


?>