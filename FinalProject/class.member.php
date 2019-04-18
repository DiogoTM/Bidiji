<?php 

class Member extends User
{
    private $memberId;
    
       
    /**
     * @return mixed
     */
    public function getMemberId()
    {
        return $this->memberId;
    }

    /**
     * @param mixed $memberId
     */
    public function setMemberId($memberId)
    {
        $this->memberId = $memberId;
    }    
    
    function __construct($name, $address, $city, $state, $phone, $email, $password){
        parent::__construct();
        $this->memberId = 0;//need to define autoincremeniting function        
    }
    
}

?>