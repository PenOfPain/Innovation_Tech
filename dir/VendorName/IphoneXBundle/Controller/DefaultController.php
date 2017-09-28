<?php

namespace VendorName\IphoneXBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('VendorNameIphoneXBundle:Default:index.html.twig');
    }
}
