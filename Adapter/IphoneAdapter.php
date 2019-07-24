<?php
include_once "autoload.php";

class IphoneAdapter{
    protected $iphone7;

    public function __construct()
    {
        $this->iphone7 = new Iphone7();
    }

    public function Size($size)
    {
        $this->iphone7->Size($size);

        // TODO: Implement Size() method.
    }
    public function Speed($speed)
    {   $this->iphone7->Speed($speed);
        // TODO: Implement Speed() method.
    }
}