<?php
namespace Prashantm\HelloWorld;

class HelloWorld
{
    private $msg;

    public function __construct($message = '')
    {
        $this->message($message);
    }

    public function message($messages)
    {
        if (empty($messages)) {
            $messages = 'This is empty message';
        }
        $this->msg = $messages;

        return $this->msg;
    }

    public function __toString()
    {
        return $this->msg;
    }
}

echo new HelloWorld('Send user message');