<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 16:35
 */

require_once 'extBase.php';

class preBase implements extBase{
    public $res;

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