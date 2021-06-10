<?php
require_once 'controler/menu.php';
require_once 'controler/salle.php';
require_once 'controler/employee.php';


$biere=new MenuItem('biere','Ca dessoif', 2.3,'boisson');
$perrier=new MenuItem('Perrier','ca pique et ça fait froncé le nez',2,'boisson');
$mojito=new MenuItem('Mojito', 'le vrai l\'unique le précieu !',5,'boisson' );
$burger=new MenuItem('Burger Classique','Du basique mais qui fait plaisir','15','burger');

$menuEte=new Menu('Chaleur et parasol','La soif est trop forte','01-01-2021','21-09-2021');
$menuCourant=new Menu('La base !','G les crocs','01-01-2021','31-12-2021');




$menuCatBiere=new MenuCategory('boissons','A boire ou je tue le chien','boisson');
$menuCatBurger=new MenuCategory('Burgers', 'C\'est gras et c\'est cool!','plat'); 

$test =new Cook;

$test->setNames('Gr0', 'Lou');

$test->isAtWork();
var_dump($test);
$test->isNotAtWork();

$order1=new Order;
var_dump($order1);
$orderItem1=new OrderItem;
var_dump($orderItem1);
$table1=new Table;
var_dump($table1);
$value=$burger->getMenuItem();
var_dump($value);

foreach ($burger->getMenuItem() as $key => $value) {
    if($key=='name'){
        ?><h1><?php echo ($value)?></h1><?php
    }
    if($key=='description'){
        ?><p><?php echo ($value)?></p><?php
    }
    if($key=='prix'){
        ?><p>Prix <?php echo ($value)?> €</p><?php
    }   
}
