<?php
class MenuItem{
    private string $_name;
    private string $_description;
    private float $_price;
    private  $_meal;

    /**
     * @param string $name nom du produit
     * @param string $description description du produit
     * @param float $price prix du produit
     * @param string $meal description plus fine de l'element
     */
    public function __construct($name, $description, $price, $meal){
        $this->_name=$name;
        $this->_description=$description;
        $this->_price=$price;
        $this->_meal=$meal;
    }      

    /**
     * @return [array] $item
     */
    public function getMenuItem(){
        $item=['name'=> $this->_name,'description'=>$this->_description,'prix'=>$this->_price,'meal'=>$this->_meal];
        return $item;
    }

}