<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 16:55
 */

require_once 'intC.php';

class preBase implements intC {
    public $res;
    public function sum($a, $b)
    {
        $this->res=$a+$b;
    }
    public function out()
    {
        return $this->res;
    }
    public function zero()
    {
        $this->res=0;
        return $this->res;
    }
}
?>