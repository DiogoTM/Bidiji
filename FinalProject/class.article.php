<?php 

class Article 
{
    
   private $articleID;
   private $price;
   private $quantity;
   private $description;
   private $name;
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

   
}

?>