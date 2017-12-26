<h1 align="center">Pay</h1>

<p align="center">
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-pay/?branch=master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-pay/badges/quality-score.png?b=master" alt="Scrutinizer Code Quality"></a>
<a href="https://scrutinizer-ci.com/g/yansongda/laravel-pay/build-status/master"><img src="https://scrutinizer-ci.com/g/yansongda/laravel-pay/badges/build.png?b=master" alt="Build Status"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/license" alt="License"></a>
</p>

该文档为 v2.x 版本，如果您想找 v1.x 版本文档，请点击[https://github.com/yansongda/laravel-pay/tree/v1.0.3](https://github.com/yansongda/laravel-pay/tree/v1.0.3)

## 安装

```shell
$ composer require yansongda/laravel-pay
```

### 添加 service provider（< laravel 5.5 || lunmen）

```php
Yansongda\LaravelPay\PayServiceProvider::class,
```

### 添加 alias（< laravel 5.5）

```php
'Pay' => Yansongda\LaravelPay\Facades\Pay::class,
```

### 配置文件

```shell
$ php artisan vendor:publish --provider="Yansongda\\LaravelPay\\PayServiceProvider" --tag=config
```

随后，请在 `config` 文件夹中完善配置信息。 

## 使用方法

```php
use Pay;

$order = [
    'out_trade_no' => time(),
    'total_amount' => '1',
    'subject' => 'test subject - 测试',
];

return Pay::alipay()->web($order);
```

具体方法请传送至 [这里](https://github.com/yansongda/pay)

## License

MIT