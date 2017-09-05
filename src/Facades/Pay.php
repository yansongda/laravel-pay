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
        return 'pay';
    }
}
