<?php

// app/config/routing.php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
 
$collection = new RouteCollection();
$collection->addCollection(
    $loader->import('@sitePageBundle/Resources/config/routing.php'),
    '/'
);
$collection->addCollection(
    $loader->import('@dashboardBundle/Resources/config/routing.php'),
    '/'
);
$collection->addCollection(
    $loader->import('@loginBundle/Resources/config/routing.php'),
    '/'
);
 
return $collection;