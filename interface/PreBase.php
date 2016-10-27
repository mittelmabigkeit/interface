<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 15:44
 */

require_once 'Base.php';

class PreBase implements Base{

    public $a, $b, $res;

    public function __construct ($a,$b){
        $this -> a = $a;
        $this -> b = $b;
    }

    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }

    public function out()
    {
        return $this->res;
    }

}
?>