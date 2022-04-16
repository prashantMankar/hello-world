<?php
namespace app\src;

class HelloWorld
{
    public function __construct()
    {
        $this->message();
    }

    public function message()
    {
        return "This is first Hello World class";
    }

    public function __toString()
    {
        return $this->message();
    }
}

echo new HelloWorld();