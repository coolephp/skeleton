<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'name' => env('APP_NAME', 'Coole'),

    'env' => env('APP_ENV', 'production'),

    'debug' => env('APP_DEBUG', false),

    'timezone' => 'Asia/Shanghai',

    'providers' => [
        \App\Provider\CommandServiceProvider::class,
    ],

    'middleware' => [
    ],

    'route' => [
        base_path('route/web.php'),
    ],
];
