<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/9/28
 * Time: 15:14
 */

abstract class Operate
{
    public $numA;
    public $numB;
    abstract public function getResult($numA,$numB);
}