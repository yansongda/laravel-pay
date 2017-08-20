<h1 align="center">Pay</h1>

<p align="center">
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/v/stable" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/downloads" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/v/unstable" alt="Latest Unstable Version"></a>
<a href="https://packagist.org/packages/yansongda/laravel-pay"><img src="https://poser.pugx.org/yansongda/laravel-pay/license" alt="License"></a>
</p>

## 安装

```shell
$ composer require yansongda/laravel-pay
```

### 添加 service provider

```php
Yansongda\LaravelPay\PayServiceProvider::class,
```

### 添加 alias

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
    'out_trade_no' => '1',
    'total_amount' => '1',
    'subject' => 'test subject',
];

return Pay::driver('alipay')->gateway('web')->pay($order);
```

具体方法请传送至 [这里](https://github.com/yansongda/pay)

## License

MIT