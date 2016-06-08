<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('home', new Route('/', array(
    '_controller' => 'sitePageBundle:Home:home',
)));

return $collection;
