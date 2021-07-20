<h1 align="center">Pay</h1>

目前 v3 版本为 beta 阶段

## 运行环境

- php >= 7.3
- composer
- laravel || lumen >= 8.0

## 安装

```Shell
$ composer require yansongda/laravel-pay:~3.0.0
```

### 添加 service provider（optional）

```PHP
// laravel < 5.5
Yansongda\LaravelPay\PayServiceProvider::class,

// lumen
$app->register(Yansongda\LaravelPay\PayServiceProvider::class);
```

### 添加 alias（optional）

```PHP
'Pay' => Yansongda\LaravelPay\Facades\Pay::class,
```

### 配置文件

```Shell
$ php artisan vendor:publish --provider="Yansongda\LaravelPay\PayServiceProvider" --tag=laravel-pay
```

**lumen 用户请手动复制**

随后，请在 `config` 文件夹中完善配置信息。

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
