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

```php
return [
    'components' => [
        'express' => [
            'class'  => 'xionglonghua\express\JtExpress',
            'host'   => "",  //快递接口host
        ],
    ],
    // ....
];
```

get order info:

```php
<?php
    $action = 'getInfo';
    $orderNumber = '123765';
    Yii::$app->express->getOrderInfo($action, $orderNumber);
?>
```