<?php
/**
 * Created by PhpStorm.
 * User: xionglonghua
 * Date: 2018/9/4
 * Time: 下午4:35
 */


require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../JtExpress.php');

$jt = new \xionglonghua\express\JtExpress();
var_dump($jt->getOrderInfo());
