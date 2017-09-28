<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/9/28
 * Time: 15:20
 */

class OperateDiv extends Operate
{
    public function getResult($numA, $numB)
    {
        if($numA)
            return $numA / $numB;
        return 0;
    }

}