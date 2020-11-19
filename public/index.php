<?php

/*
 * This file is part of the coole-php/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

use Guanguans\Coole\App;

! defined('BASE_PATH') && define('BASE_PATH', dirname(__DIR__));

require BASE_PATH.'/vendor/autoload.php';

(function () {
    $config = [];

    $app = new App($config);

    require BASE_PATH.'/route/web.php';

    $app->run();
})();
