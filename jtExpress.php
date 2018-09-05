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

    public function getOrderInfo($action = '', $orderNumber = 0)
    {
        if (!$this->action = $action) {
            throw new InvalidParamException("Please configure action.");
        }
        return $this->setGet()->httpExec($this->action, ['awb' => $orderNumber]);
    }

}
