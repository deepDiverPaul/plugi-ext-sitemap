<?php

use Plugi\Extensions;

Extensions::addRoutes([
    '/sitemap.xml' => dirname(__FILE__) . '/routes/sitemap.php'
]);
