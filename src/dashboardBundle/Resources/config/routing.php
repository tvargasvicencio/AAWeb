<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('dashboard', new Route('/dashboard', array(
    '_controller' => 'dashboardBundle:Default:index',
)));

$collection->add('saveCorpInfo', new Route('/dashboard/saveCorpInfo', array(
    '_controller' => 'dashboardBundle:Default:saveCorpInfo',
)));

$collection->add('saveContact', new Route('/dashboard/saveContact', array(
    '_controller' => 'dashboardBundle:Default:saveContact',
)));

$collection->add('saveDesign', new Route('/dashboard/saveDesign', array(
    '_controller' => 'dashboardBundle:Default:saveDesign',
)));

$collection->add('saveProductLine', new Route('/dashboard/saveProductLine', array(
    '_controller' => 'dashboardBundle:Default:saveProductLine',
)));

return $collection;
