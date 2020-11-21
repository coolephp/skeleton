<?php

declare(strict_types=1);

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

return [
    'command' => [
        [
            'dir' => base_path('app/Command/'),
            'namespace' => 'App\Command',
            'suffix' => '*Command.php',
        ],
    ],
];
