<?php
/**
 * Created by PhpStorm.
 * User: html
 * Date: 27.10.2016
 * Time: 17:00
 */

require_once 'preBase.php';

$sum=new PreBase();
$sum->sum(15,10);
echo $sum->out();
echo "</br>";
echo $sum->zero();
?>