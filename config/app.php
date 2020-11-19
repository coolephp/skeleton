<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'name' => 'coole',

    'env' => 'production',

    'debug' => true,

    'timezone' => 'UTC',

    'providers' => [
    ],

    'middleware' => [
    ],

    'route' => [
        base_path('route/web.php'),
    ],
];
