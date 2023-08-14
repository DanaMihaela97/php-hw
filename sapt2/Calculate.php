<?php

class Calculate{

    public function calculateNetSalary($salariuBrut, $impozit, $contributiiSociale, $alteDeduceri):float{
        $impoziteContr = ($salariuBrut * $impozit) + ($salariuBrut * $contributiiSociale);

        $salariuNet = $salariuBrut - $impoziteContr - $alteDeduceri;

        return $salariuNet;
    }
}


?>