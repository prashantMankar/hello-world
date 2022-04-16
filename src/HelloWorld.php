<?php
namespace app\src;

class HelloWorld
{
    public function __construct($message)
    {
        $this->message($message);
    }

    public function message($messages)
    {
        return $messages;
    }

    public function __toString()
    {
        return $this->message();
    }
}

echo new HelloWorld('Send user message');