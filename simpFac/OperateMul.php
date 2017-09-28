<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/9/28
 * Time: 15:22
 */

class OperateMul extends Operate
{
    public function getResult($numA, $numB)
    {
        return $numB * $numA;
    }
}