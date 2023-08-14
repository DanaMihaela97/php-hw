<?php

class Calculator{
    protected $firstNumber;
    protected $secondNumber;
    protected $sign;

    public function __construct($firstNumber, $secondNumber, $sign)
    {
        $this->firstNumber = $firstNumber;
        $this->secondNumber=$secondNumber;
        $this->sign=$sign;
        
    }
function calculator(){
    switch ($this->sign){
        case "+":
             $sum = $this->firstNumber + $this->secondNumber;
             echo $sum  . "<br>";
            break;
        case "-":
            $dif = $this->firstNumber - $this->secondNumber;
             echo $dif  . "<br>";
             break;
        case "/":
            $div= $this->firstNumber / $this->secondNumber;
            echo $div  . "<br>";
            break;
        case "*":
            $multipl = $this->firstNumber * $this->secondNumber;
            echo $multipl . "<br>";
            break;
    }
}
}

?>