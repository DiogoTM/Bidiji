<?php 

class Employee extends User{
    
    private $empId;
    /**
     * @return mixed
     */
    public function getEmpId()
    {
        return $this->empId;
    }

    /**
     * @param mixed $empId
     */
    public function setEmpId($empId)
    {
        $this->empId = $empId;
    }

    
}

?>