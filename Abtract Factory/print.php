<?php

include "autoload.php";

$shapeFactory = FactoryProducer::getFactory("shape");
$shape = $shapeFactory->getShape("circle");
$shape->draw();

$colorFactory = FactoryProducer::getFactory("color");
$color = $colorFactory->getColor("red");
$color->fill();