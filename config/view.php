<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'path' => base_path('view'),
    'options' => [
        'debug' => false,
        'charset' => 'UTF-8',
        'strict_variables' => false,
        'autoescape' => 'html',
        'cache' => base_path('runtime/views'),
        'auto_reload' => null,
        'optimizations' => -1,
    ],
];
