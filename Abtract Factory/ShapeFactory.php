<?php

require_once "Shape.php";
require_once "Square.php";
require_once "Circle.php";
require_once "Rectangle.php";

class ShapeFactory
{
    public function getShape($type){
        switch($type){
            case Shape::SQUARE:
                    return new Square;
                    break;
            case Shape::CIRCLE:
                    return new Circle;
                    break;
            case Shape::RECTANGLE:
                    return new Rectangle;
                    break;
            default:
                return null;
                break;

        }

    }
}