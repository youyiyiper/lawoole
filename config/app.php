<?php

return [
   /*
   |--------------------------------------------------------------------------
   | 调试模式
   |--------------------------------------------------------------------------
   */

    'debug' => false,

    /*
    |--------------------------------------------------------------------------
    | 运行环境
    |--------------------------------------------------------------------------
    */

    'environment' => 'production',

    /*
    |--------------------------------------------------------------------------
    | 时区
    |--------------------------------------------------------------------------
    */

    'timezone' => 'PRC',

    /*
    |--------------------------------------------------------------------------
    | 地区
    |--------------------------------------------------------------------------
    */

    'locale' => 'zh-CN',

    /*
    |--------------------------------------------------------------------------
    | 备选地区
    |--------------------------------------------------------------------------
    */

    'fallback_locale' => 'zh-CN',

    /*
    |--------------------------------------------------------------------------
    | 加密参数
    |--------------------------------------------------------------------------
    */

    'key' => '!!RandomString!!',

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | 服务提供者
    |--------------------------------------------------------------------------
    */

    'providers' => [
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        Laravel\Tinker\TinkerServiceProvider::class,

        Lawoole\Providers\ConsoleServiceProvider::class,
        Lawoole\Providers\RouteServiceProvider::class,
        Lawoole\Routing\RoutingServiceProvider::class,
        Lawoole\Server\ServerServiceProvider::class,
    ]
];
