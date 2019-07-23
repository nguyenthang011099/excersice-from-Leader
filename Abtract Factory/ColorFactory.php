<?php
class ColorFactory extends AbstractFactory
{
    public function getColor($color)
    {
            switch (strtolower($color)){
                case "red":
                    return new Red();
                    break;
                case "blue":
                    return new Blue();
                    break;
                case "green":
                    return new Green();
                    break;
                default:
                    return null;
                    break;

            }
            return null;
           // TODO: Implement getColor() method.
    }

    function getShape($shape)
    {
        // TODO: Implement getShape() method.
    }
}