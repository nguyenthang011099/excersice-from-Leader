<?php

include "autoload.php";

$factory = new ShapeFactory();
$shapeCircle= $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();