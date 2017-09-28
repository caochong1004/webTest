<?php
require_once "simpFac/Operate.php";
require_once "simpFac/OperateAdd.php";
require_once "simpFac/OperateDiv.php";
require_once "simpFac/OperateSub.php";
require_once "simpFac/OperateMul.php";
require_once "simpFac/OperateFactory.php";

$obj = new OperateFactory();
$objre = $obj->create("/");
echo $objre->getResult(4,5);