<?php
class Menu{
    private string $_name;
    private string $_motto;
    private DateTime $_validFrom;
    private DateTime $_validTo;

    /**
     * @param string $name nom de la carte
     * @param string $motto slogan de la carte
     * @param DateTime $validFrom date de début de validité commerciale
     * @param DateTime $validTo date de fin de validité commerciale
     */
    public function __construct($name, $motto, $validFrom, $validTo){
        $validFrom =new DateTime($validFrom);
        $validFrom->format('Y-m-d');
        $validTo =new DateTime($validTo);
        $validTo->format('Y-m-d');
        $this->_name=$name;
        $this->_motto=$motto;
        $this->_validFrom=$validFrom;
        $this->_validTo=$validTo;
    } 
}