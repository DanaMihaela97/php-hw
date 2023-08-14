<?php

class Greeting{
    
    public function greetings($message):void{
        echo "Hello, my name is $message";
    }
}
$myName = new Greeting();
$myName->greetings("Dana");

?>
