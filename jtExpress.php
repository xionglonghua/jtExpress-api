<?php

/**
 * User: xionglonghua
 * Date: 2018/9/4
 * Time: 下午3:11
 */

namespace xionglonghua\express;

use \Yii;
use yii\caching\Cache;
use yii\base\InvalidParamException;

class JtExpress extends \lspbupt\curl\CurlHttp
{
    public $host;
    public $action;
    public $protocol = "https";

    public $orderNumber = '';

    public function init()
    {
        parent::init();
        if (empty($this->action)) {
            throw new InvalidParamException("Please configure action.");
        }
        $this->afterRequest = function($output, $curlhttp) {
            $data = json_decode($output, true);
            if(empty($output)) {
                $data = [
                    'errcode' => 1,
                    'errmsg' => '网络错误!',
                ];
            }
            return $data;
        };
    }

    public function getOrderInfo($orderNumber = 0)
    {
        return $this->setGet()->httpExec($this->action, ['awb' => $orderNumber]);
    }

}
