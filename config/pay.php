<?php

return [
    'alipay' => [
        // 支付宝分配的 APPID
        'app_id' => '',

        // 支付宝异步通知地址
        'notify_url' => '',
        
        // 支付成功后同步通知地址
        'return_url' => '',
        
        // 阿里公共密钥，验证签名时使用
        'ali_public_key' => '',
        
        // 自己的私钥，签名时使用
        'private_key' => '',
    ],

    'wechat' => [
        // 公众号APPID
        'app_id' => '',

        // 小程序APPID
        'miniapp_id' => '',

        // APP 引用的 appid
        'appid' => '',

        // 微信支付分配的微信商户号
        'mch_id' => '',

        // 微信支付异步通知地址
        'notify_url' => '',

        // 微信支付签名秘钥
        'key' => '',

        // 客户端证书路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_client' => '',

        // 客户端秘钥路径，退款时需要用到。请填写绝对路径，linux 请确保权限问题。pem 格式。
        'cert_key' => '',
    ],
];