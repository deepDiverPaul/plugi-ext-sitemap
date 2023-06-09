<?php

use PHPageBuilder\Extensions;

Extensions::addRoutes([
    '/sitemap.xml' => dirname(__FILE__) . '/routes/sitemap.php'
]);
