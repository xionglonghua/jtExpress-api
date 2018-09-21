# yii2-jtexpress-api
这个扩展提供了一个基于yii2的j&amp;t express 标准物流信息查询接口封装。

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).
推荐的方式是通过composer 进行下载安装[composer](http://getcomposer.org/download/)。

Either run
在命令行执行
```
php composer.phar require --prefer-dist "xionglonghua/yii2-jtexpress-api" "*"
```

or add
或加入

```
"xionglonghua/yii2-jtexpress-api": "*"
```

to the require-dev section of your `composer.json` file.
到你的`composer.json`文件中的require-dev段。

Usage
-----
Configure Yii2 component:
一旦你安装了这个插件，你就可以直接在配置文件中加入如下的代码：

Configure Yii2 component:
```php
return [
    'components' => [
        'express' => [
            'class'    => 'xionglonghua\express\JtExpress',
        ],
    ],
    // ....
];
```

Configure Yii2 param:
```php
[
    'express' => [
        'jnt' => [
            'key'          => '',
            'username'     => '',
            'API_KEY'      => '',
            'orderHost'    => '',
            'trackingHost' => '',
        ],
    ],
];
```

get order info:

```php
<?php
    Yii::$app->express->getOrderInfo('123765');
?>
```

online order:

```php
<?php
    $data = [
        'orderid'=>'ORDERID-0001', //必填，电商的订单号
        'shipper_name'=>'PENGIRIM',  //必填，寄件人名字
        'shipper_contact'=>'PENGIRIM',  //必填，联系人名字（跟寄件人名字一样）
        'shipper_phone'=> '+628123456789',  //必填，寄件人电话号码 格式（+62 开头）
        'shipper_addr'=>'JL. Pengirim no.88, RT/RW:001/010, Pluit',  //必填，寄件地址
        'origin_code'=>'JKT',   //必填， 寄件城市编码，（区分大小写，大字）
        'receiver_name'=>'PENERIMA',  //必填，收件人名字
        'receiver_phone'=>'+62812348888',  //必填，收件人电话号码 格式（+62 开头）
        'receiver_addr'=>'JL. Penerima no.1, RT/RW:04/07, Sidoarjo',  //必填，收件人地址
        'receiver_zip'=>'40123',  //必填，收件人邮政编码
        'receiver_area'=>'SDA001',  //必填，收件人区域编码
        'destination_code'=>'SDA',  //必填， 目的地城市编码 （区分大小写，大字）
        'qty'=>'1',  //必填，件数
        'weight'=>'1',  //必填，重量
        'goodsdesc'=>'TESTING!!',  //必填，描述此件里面是什么东西
        'servicetype'=>'1', //可空，服务类型， “1”取件； ”6“上门取件
        'insurance'=>'50000', //可空，保险
        'item_name'=>'topi', //可空，描述此件里面是什么东西
        'cod'=>'200000', //可空， COD 价值 （印尼币）
    ];
    Yii::$app->express->onlineOrder($params);
?>

```