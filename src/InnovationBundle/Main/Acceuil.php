<?php

namespace InnovationBundle\Main;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use InnovationBundle\Repository\CategoryRepository;

class DefaultController extends Controller
{
      /**
      * @Route("/acceuil/{categoryId}", name="acceuil")
      */
    public function accueilAction(int $categoryId)
    {
      $categoryRep = new CategoryRepository();

      $categories = $categoryRep->findAllCategories();

      return $this->render('InnovationBundle:Category:categoryList.html.twig', [
          'category' => $categories[$categoryId]
        ]);
    }
}
