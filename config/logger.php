<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Monolog\Logger;

return [
    'name' => 'app',
    'level' => Logger::DEBUG,
    'bubble' => true,
    'permission' => null,
    'log_file' => null,
    'use_locking' => false,
];
