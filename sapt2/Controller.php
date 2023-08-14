<?php

require_once 'Calculate.php';
require_once 'View.php';

class Controller{
    public function index(){
        $calculate = new Calculate();
        $total = $calculate->calculateNetSalary(4000, 0.30, 0.12, 50);
        $view = new View();
        return $view->print($total);
    }
}

$controller=new Controller();
$controller->index();


?>
