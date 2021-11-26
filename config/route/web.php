<?php

declare(strict_types=1);

/**
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Coole\Foundation\App;
use Coole\Routing\Facade\Router;

// routing: /
Router::get('/', function () {
    $links = [
        ['name' => 'documentation', 'href' => 'https://www.guanguans.cn/coole'],
        ['name' => 'api', 'href' => 'https://www.guanguans.cn/coole/api/main'],
        ['name' => 'github', 'href' => 'https://github.com/guanguans/coole'],
        ['name' => 'coole-skeleton', 'href' => 'https://github.com/coolephp/skeleton'],
        ['name' => 'organization', 'href' => 'https://github.com/coolephp'],
    ];

    return App::render('welcome.twig', ['links' => $links]);
});

// routing: /hello OR /hello/*
Router::get('/hello/{keyword?}', [\App\Controllers\IndexController::class, 'hello'])->addDefaults(['keyword' => 'Coole']);
