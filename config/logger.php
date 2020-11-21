<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
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
    'log_file' => base_path('runtime/logs/app.log'),
    'use_locking' => false,
];
