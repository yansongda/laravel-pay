<h1 align="center">Pay</h1>

## 依赖

- php >= 8.0
- composer
- laravel || lumen >= 8.0

## 安装

```Shell
composer require yansongda/laravel-pay:~3.7.0
```

### laravel 用户

#### 配置文件

```Shell
php artisan vendor:publish --provider="Yansongda\LaravelPay\PayServiceProvider" --tag=laravel-pay
```

### lumen 用户

#### 配置文件

请手动复制配置文件

#### service provider

```PHP
$app->register(Yansongda\LaravelPay\PayServiceProvider::class);
```

## 使用方法

### 支付宝

```PHP
use Yansongda\LaravelPay\Facades\Pay;

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
use Yansongda\LaravelPay\Facades\Pay;

$order = [
    'out_trade_no' => time(),
    'body' => 'subject-测试',
    'total_fee'      => '1',
    'openid' => 'onkVf1FjWS5SBIixxxxxxxxx',
];

$result = Pay::wechat()->mp($order);

```

### 抖音支付

```PHP
use Yansongda\LaravelPay\Facades\Pay;

$order = [
    'out_order_no' => date('YmdHis').mt_rand(1000, 9999),
    'total_amount' => 1,
    'subject' => '闫嵩达 - test - subject - 01',
    'body' => '闫嵩达 - test - body - 01',
    'valid_time' => 600,
    'expand_order_info' => json_encode([
        'original_delivery_fee' => 15,
        'actual_delivery_fee' => 10
    ])
];

$result = Pay::douyin()->mini($order);

```


### 江苏银行(e融支付)

```PHP
use Yansongda\LaravelPay\Facades\Pay;

$order = [
    'outTradeNo' => time().'',
    'proInfo' => 'subject-测试',
    'totalFee'=> 1,
];

$result = Pay::jsb()->scan($order);

```

具体使用说明请传送至 [https://github.com/yansongda/pay](https://github.com/yansongda/pay)

## License

MIT

## Sponsor

[![Powered by DartNode](https://dartnode.com/branding/DN-Open-Source-sm.png)](https://dartnode.com "Powered by DartNode - Free VPS for Open Source")
