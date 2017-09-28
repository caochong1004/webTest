<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/9/28
 * Time: 15:29
 */

class OperateFactory
{
    public function create($op){
        switch ($op){
            case "+":
                return new OperateAdd();
                break;
            case "-":
                return new OperateSub();
                break;
            case "/":
                return new OperateDiv();
                break;
            case "*":
                return new OperateMul();
                break;
        }
    }
}