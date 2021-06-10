<?php
class MenuCategory{
    private string $_name;
    private string $_description;
    private string $_category;

    /**
     * @param string $name nom commerciale de la catégorie
     * @param string $description description de la catégorie
     * @param string $category nom catégorie technique de gestion administrative
     */
    public function __construct($name, $description, $category){
        $this->_name=$name;
        $this->_description=$description;
        $this->_category=$category;
       
    } 
}