<?php 

class Administrator extends User{
    
    private $adminId;  
    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }
    
    function __construct($name, $address, $city, $state, $phone, $email, $password)
    {
        parent::__construct();
        $this->adminId = 0;  //need to define autoincremeniting function
    }
    
  

    
}

?>