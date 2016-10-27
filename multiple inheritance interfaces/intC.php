<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 16:55
 */

require_once 'intB.php';

interface intC extends intA, intB
{
    public function zero();
}
?>