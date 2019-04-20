<?php 

class Article 
{
    
   private $articleID;
   private $price;
   private $quantity;
   private $description;
   private $name;
   
   function __construct($price, $quantity, $description, $){
       
       $this->userId = $userId;
       $this->subcategoryId = $subcategoryId;
       $this->startDate = date('Y-m-d');
       $this->endDate = date('Y-m-d') + 30;
       
   }   
   
   
/**
     * @return mixed
     */
    public function getArticleID()
    {
        return $this->articleID;
    }

/**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

/**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

/**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

/**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

/**
     * @param mixed $articleID
     */
    public function setArticleID($articleID)
    {
        $this->articleID = $articleID;
    }

/**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

/**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

/**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

/**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    
    public function register($connectionId, $adId)
    {
        
        try
        {
            $stmt = $connectionId->prepare("INSERT INTO article (adId,price,quantity, description, name)
              VALUES(:adId, :price, :quantity, :description, :name)");
            
            $stmt->bindparam(":adId", $adId);
            $stmt->bindparam(":price", $this->price);
            $stmt->bindparam(":quantity", $this->quantity);
            $stmt->bindparam(":description", $this->description);
            $stmt->bindparam(":name", $this->name);
            
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