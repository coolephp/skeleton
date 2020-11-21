<?php

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Provider;

use Guanguans\Coole\Able\AfterRegisterAbleProviderInterface;
use Guanguans\Coole\App;
use Guanguans\Di\Container;
use Guanguans\Di\ServiceProviderInterface;

class MiddlewareServiceProvider implements ServiceProviderInterface, AfterRegisterAbleProviderInterface
{
    public function register(Container $app)
    {
    }

    public function afterRegister(App $app)
    {
        $app->addMiddleware($app['config']['app']['middleware']);
    }
}
