<?php


class FactoryProducer
{
    public static function getFactory($choice){
        $choice = strtolower($choice);
        if($choice =="shape"){
            return new ShapeFactory;

        }
        elseif($choice=="color"){
            return  new ColorFactory();
        }
        return null;
    }
}