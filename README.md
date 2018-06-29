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

## 运行环境

- php >= 7.0
- composer
- laravel || lumen >= 5.1

## 安装

```Shell
$ composer require yansongda/laravel-pay
```

### 添加 service provider（optional. if laravel < 5.5 || lumen）

```PHP
// laravel < 5.5
Yansongda\LaravelPay\PayServiceProvider::class,

// lumen
$app->register(Yansongda\LaravelPay\PayServiceProvider::class);
```

### 添加 alias（optional. if laravel < 5.5）

```PHP
'Pay' => Yansongda\LaravelPay\Facades\Pay::class,
```

### 配置文件

```Shell
$ php artisan vendor:publish --provider="Yansongda\\LaravelPay\\PayServiceProvider" --tag=laravel-pay
```

**lumen 用户请手动复制**

随后，请在 `config` 文件夹中完善配置信息。

`.env` 文件里面配置

```PHP
// alipay 配置
ALI_APP_ID=
ALI_PUBLIC_KEY=
ALI_PRIVATE_KEY=

// wechat 配置
WECHAT_APP_ID=
WECHAT_MINIAPP_ID=
WECHAT_APPID=
WECHAT_MCH_ID=
WECHAT_KEY=
```

## 使用方法

### 支付宝

```PHP
use Pay;

$order = [
    'out_trade_no' => time(),
    'total_amount' => '1',
    'subject' => 'test subject - 测试',
];

return Pay::alipay()->web($order);

// 下面这个方法也可以
// return Pay::web($order);
```

### 微信

```PHP
use Pay;

$order = [
    'out_trade_no' => time(),
    'body' => 'subject-测试',
    'total_fee'      => '1',
    'openid' => 'onkVf1FjWS5SBIixxxxxxxxx',
];

$result = Pay::wechat()->mp($order);

```

具体使用说明请传送至 [https://github.com/yansongda/pay](https://github.com/yansongda/pay)

## License

MIT