<?php

namespace InnovationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use InnovationBundle\Repository\CategoryRepository;

class AcceuilController extends Controller
{
      /**
      * @Route("/acceuil", name="home")
      */
    public function accueilAction()
    {

      for ($a = 0; $a <=3; $a++)
      {


      }
      $categoryRep = new CategoryRepository();

    //  $categories = $categoryRep->findAllCategories();

      return $this->render('InnovationBundle:Category:categoryList.html.twig');
    }
}
