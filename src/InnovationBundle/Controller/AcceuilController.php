<?php

namespace InnovationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use InnovationBundle\Repository\CategoryRepository;

class AcceuilController extends Controller
{
      /**
      * @Route("/acceuil/{categoryId}", name="home")
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
