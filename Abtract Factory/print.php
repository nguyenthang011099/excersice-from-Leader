<?php

require_once "ShapeFactory.php";
require_once "Shape.php";

$factory = new ShapeFactory();
$shapeCircle= $factory->getShape(Shape::CIRCLE);
$shapeCircle->draw();