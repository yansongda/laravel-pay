<?php

declare(strict_types=1);

namespace Yansongda\LaravelPay\Facades;

use Illuminate\Support\Facades\Facade;
use Yansongda\Pay\Provider\Alipay;
use Yansongda\Pay\Provider\Douyin;
use Yansongda\Pay\Provider\Jsb;
use Yansongda\Pay\Provider\Unipay;
use Yansongda\Pay\Provider\Wechat;

class Pay extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'pay.alipay';
    }

    public static function alipay(): Alipay
    {
        return app('pay.alipay');
    }

    public static function wechat(): Wechat
    {
        return app('pay.wechat');
    }

	public static function douyin(): Douyin
	{
		return app('pay.douyin');
	}

	public static function jsb(): Jsb
	{
		return app('pay.jsb');
	}

    public static function unipay(): Unipay
	{
		return app('pay.unipay');
	}
}
