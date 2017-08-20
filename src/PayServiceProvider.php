<?php

namespace Yansongda\LaravelPay;

use Yansongda\Pay\Pay;
use Illuminate\Support\ServiceProvider;

class PayServiceProvider extends ServiceProvider
{
    /**
     * 显示是否延迟提供程序的加载.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * boot a service.
     * 
     * @author yansongda <me@yansongda.cn>
     * 
     * @version 2017-08-20
     * 
     * @return  [type]     [description]
     */
    public function boot()
    {
        if (!file_exists(config_path('pay.php'))) {
            $this->publishes([
                dirname(__DIR__) . '/config/pay.php' => config_path('pay.php'),
            ], 'config');
        }
    }

    /**
     * 在容器中注册绑定.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(dirname(__DIR__) . '/config/pay.php', 'pay');

        $this->app->singleton(Pay::class, function ($app) {
            return new Pay(config('pay'));
        });

        $this->app->alias(Pay::class, 'pay');
    }

    /**
     * 获取提供者提供的服务.
     *
     * @return array
     */
    public function provides()
    {
        return [Pay::class, 'pay'];
    }
}