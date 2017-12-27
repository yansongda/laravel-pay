<?php

namespace Yansongda\LaravelPay\Facades;

use Illuminate\Support\Facades\Facade;

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
     * @return string
     */
    public static function alipay()
    {
        return app('pay.alipay');
    }

    /**
     * Return the facade accessor.
     *
     * @return string
     */
    public static function wechat()
    {
        return app('pay.wechat');
    }
}
