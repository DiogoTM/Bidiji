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

    function __construct($name, $address, $city, $state, $phone, $email, $password){
        parent::__construct();
        $this->empId = 0;//need to define autoincremeniting function
    }
}

?>