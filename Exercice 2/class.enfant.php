<?php
 class Enfant{
    
    private $_age;

    public function __construct($age)
    {
        $this->_age = $age;
    }
    public function getAge(){
        return $this->_age;
    }
    public function setAge($age){
        return $this->_age = $age;
    }


 }

?>