<?php
include_once 'model/menu.php';
include_once 'model/menuCategory.php';
include_once 'model/menuItem.php';


$biere=new MenuItem('biere','Ca dessoif', 2.3,'boisson');
$perrier=new MenuItem('Perrier','ca pique et ça fait froncé le nez',2,'boisson');
$mojito=new MenuItem('Mojito', 'le vrai l\'unique le précieu !',5,'boisson' );
$burger=new MenuItem('Burger Classique','Du basique mais qui fait plaisir','15','burger');

$menuEte=new Menu('Chaleur et parasol','La soif est trop forte','01-01-2021','21-09-2021');
$menuCourant=new Menu('La base !','G les crocs','01-01-2021','31-12-2021');


$menuCatBiere=new MenuCategory('boissons','A boire ou je tue le chien','boisson');
$menuCatBurger=new MenuCategory('Burgers', 'C\'est gras et c\'est cool!','plat'); 