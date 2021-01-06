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
    /*
     * 视图文件目录
     */
    'path' => base_path('view'),

    /*
     * 选项
     */
    'options' => [
        // Debug
        'debug' => false,

        // 字符集
        'charset' => 'UTF-8',

        // 是否忽略模板中的无效变量
        'strict_variables' => false,

        // 是否启用自动转义
        'autoescape' => 'html',

        // 缓存目录
        'cache' => base_path('runtime/views'),

        // 如果模板更改，是否重新加载模板
        'auto_reload' => null,

        // 优化
        'optimizations' => -1,
    ],
];
