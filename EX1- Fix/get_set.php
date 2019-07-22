<?php

class main
{
    public $link;

    function setLink($value)
    {
        $this->link = $value;
    }

    function getLink()
    {
        return $this->link;
    }

    function __constructor($link)
    {
        $this->link = $link;
    }
}
