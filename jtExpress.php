<?php

/**
 * User: xionglonghua
 * Date: 2018/9/4
 * Time: 下午3:11
 */

namespace xionglonghua\express;

use \Yii;
use yii\caching\Cache;
use yii\di\Instance;

class JtExpress extends \lspbupt\curl\CurlHttp
{
    public $orderNumber = '';

    public function init()
    {
        parent::init();
    }

    public function getOrderInfo()
    {
        return 'test';
    }

}
