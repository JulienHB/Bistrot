<?php
class Employee{
    private string $_firstname;
    private string $_lastname;
    private bool $_Atwork=false;

    public function __construct()
    {
        
    }
    public function setNames($firstname, $lastname){
        $this->_firstname=$firstname;
        $this->_lastname=$lastname;      
    }

    public function getNames(){
        echo($this->_firstname);
        echo($this->_lastname);     
    }

    public function isAtWork(){
        $this->_Atwork=true;
        echo('Une bonne journée commence!!!');
    }
    public function isNotAtWork(){
        $this->_Atwork=false;
        echo('apéro bien mérité;)');
    }
}

