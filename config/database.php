<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'default' => 'mysql',
    'connections' => [
        'mysql' => [
            'type' => 'mysql',
            'hostname' => '127.0.0.1',
            'hostport' => 3306,
            'username' => 'root',
            'password' => '',
            'database' => '',
            'params' => [],
            'charset' => 'utf8',
            'prefix' => '',
            'debug' => true,
        ],
    ],
];
