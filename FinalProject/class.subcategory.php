<?php 

class Subcategory
{
    private $subcategoryId;
    private $categorId;
    private $nameFR;
    private $nameENG;
    private $descFR;
    private $descENG;
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
    public function getCategorId()
    {
        return $this->categorId;
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
     * @param mixed $subcategoryId
     */
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;
    }

    /**
     * @param mixed $categorId
     */
    public function setCategorId($categorId)
    {
        $this->categorId = $categorId;
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