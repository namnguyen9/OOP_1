<?php 
include_once('Fan.php');
 $fan1 = new Fan();
 // var_dump($fan1->getSpeed());
 // var_dump($fan1->getOn());
 // var_dump($fan1->getRadius());
 // var_dump($fan1->getColor());
 // var_dump($fan1->toString());
 $fan1->setSpeed($fan1->getFAST())->setRadius(10)->setColor("yellow")->setOn(true);
 echo "<h3>Fan1</h3>";
 echo "FAST " . $fan1->getSpeed() . "<br>";
 echo "Radius " . $fan1->getRadius() . "<br>";
 echo "Color " . $fan1->getColor() . "<br>";
 echo "Statu " . $fan1->getOn() . "<br>";
 echo  $fan1->toString() . "<hr>";

 $fan2 = new Fan();
 $fan2->setSpeed($fan2->getMEDIUM())->setRadius(5)->setColor("blue")->setOn(false);
 echo "<h3>Fan2</h3>";
 echo "FAST " . $fan2->getSpeed() . "<br>";
 echo "Radius " . $fan2->getRadius() . "<br>";
 echo "Color " . $fan2->getColor() . "<br>";
 echo "Statu " . $fan2->getOn() . "<br>";
 echo  $fan2->toString();
?>