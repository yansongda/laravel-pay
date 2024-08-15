<?php

declare(strict_types=1);

namespace Yansongda\LaravelPay\Facades;

use Illuminate\Support\Facades\Facade;
use Yansongda\Pay\Provider\Alipay;
use Yansongda\Pay\Provider\Douyin;
use Yansongda\Pay\Provider\Jsb;
use Yansongda\Pay\Provider\Wechat;

class Pay extends Facade
{
    /**
     * Return the facade accessor.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
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

	/**
	 * Return the facade accessor.
	 *
	 * @return Douyin
	 */
	public static function douyin(): Douyin
	{
		return app('pay.douyin');
	}

	/**
	 * Return the facade accessor.
	 *
	 * @return Jsb
	 */
	public static function jsb(): Jsb
	{
		return app('pay.jsb');
	}
}
