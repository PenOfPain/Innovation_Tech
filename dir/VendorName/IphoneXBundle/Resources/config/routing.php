<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('vendor_name_iphone_x_homepage', new Route('/', array(
    '_controller' => 'VendorNameIphoneXBundle:Default:index',
)));

return $collection;
