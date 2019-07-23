<?php

include  "autoload.php";
abstract class AbstractFactory
{
    abstract function getShape($shape);
    abstract function getColor($color);

}