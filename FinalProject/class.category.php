<?php 

class Category 
{
    private $categoryId;
    private $nameFR;
    private $nameENG;
    private $descFR;
    private $descENG;
    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @return mixed
     */
    public function getNameFR()
    {
        return $this->nameFR;
    }

    /**
     * @return mixed
     */
    public function getNameENG()
    {
        return $this->nameENG;
    }

    /**
     * @return mixed
     */
    public function getDescFR()
    {
        return $this->descFR;
    }

    /**
     * @return mixed
     */
    public function getDescENG()
    {
        return $this->descENG;
    }

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @param mixed $nameFR
     */
    public function setNameFR($nameFR)
    {
        $this->nameFR = $nameFR;
    }

    /**
     * @param mixed $nameENG
     */
    public function setNameENG($nameENG)
    {
        $this->nameENG = $nameENG;
    }

    /**
     * @param mixed $descFR
     */
    public function setDescFR($descFR)
    {
        $this->descFR = $descFR;
    }

    /**
     * @param mixed $descENG
     */
    public function setDescENG($descENG)
    {
        $this->descENG = $descENG;
    }

    
}

?>