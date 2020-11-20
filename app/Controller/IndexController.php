<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Controller;

use Guanguans\Coole\Controller\Controller;

class IndexController extends Controller
{
    public function hello($hello)
    {
        return sprintf('Hello %s', $hello);
    }
}
