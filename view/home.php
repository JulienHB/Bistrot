<?php
$value=$burger->getMenuItem();
//var_dump($value);


$bouf=[$burger,$mojito,$biere,$perrier];
//var_dump($bouf);
foreach ($bouf as $key => $value){
?><h1><?php echo ($value->getName())?></h1><?php
?><p><?php echo ($value->getDescription())?></p><?php
?><p>Prix <?php echo ($value->getPrice())?> €</p><?php
}