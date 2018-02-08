<?php

return [

    /*
    |--------------------------------------------------------------------------
    | 中间件定义
    |--------------------------------------------------------------------------
    */

    'middleware' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | 路由中间件定义
    |--------------------------------------------------------------------------
    */

    'route_middleware' => [

    ],

    /*
    |--------------------------------------------------------------------------
    | 路由规则文件
    |--------------------------------------------------------------------------
    */

    'routes' => [

        'web' => [
            'path'      => route_path('web.php'),
            'namespace' => 'App\Http\Controllers'
        ],

        'api' => [
            'path'       => route_path('api.php'),
            'prefix'     => 'api',
            'namespace'  => 'App\Http\Controllers',
            'middleware' => [
                Lawoole\Foundation\Http\Middleware\ParseJsonRequest::class
            ]
        ],

    ]

];
