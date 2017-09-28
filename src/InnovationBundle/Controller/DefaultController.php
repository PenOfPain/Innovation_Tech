<?php

namespace InnovationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use InnovationBundle\Repository\PhoneRepository;

class DefaultController extends Controller
{
      /**
      * @Route("/phoness/{phoneId}", name="default")
      */
    public function detailAction(int $phoneId)
    {
      $phoneRepository = new PhoneRepository();

      $phones = $phoneRepository->findAllPhones();

      return $this->render('InnovationBundle:Phone:detail.html.twig', [
          'phone' => $phones[$phoneId]
        ]);
    }
}
