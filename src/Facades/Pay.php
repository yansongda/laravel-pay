<?php

declare(strict_types=1);

namespace Yansongda\LaravelPay\Facades;

use Illuminate\Support\Facades\Facade;
use Yansongda\Pay\Provider\Alipay;
use Yansongda\Pay\Provider\Wechat;

class Pay extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'pay.alipay';
    }

    /**
     * Return the facade accessor.
     *
     * @return Alipay
     */
    public static function alipay(): Alipay
    {
        return app('pay.alipay');
    }

    /**
     * Return the facade accessor.
     *
     * @return Wechat
     */
    public static function wechat(): Wechat
    {
        return app('pay.wechat');
    }
}
