<?php
include "autoload.php";

class ShapeFactory extends AbstractFactory
{
    public function getShape($shape)
    {
        switch (strtolower($shape)) {
            case "square":
                return new Square;
                break;
            case "circle":
                return new Circle;
                break;
            case "rectangle":
                return new Rectangle;
                break;
            default:
                return null;
                break;

        }
        return null;

    }

    function getColor($color)
    {

    }
}