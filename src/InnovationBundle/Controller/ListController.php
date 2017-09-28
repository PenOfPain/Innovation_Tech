<?php

namespace InnovationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use InnovationBundle\Repository\PhoneRepository;

class ListController extends Controller
{
      /**
      * @Route("/phone/{phoneId}", name="detail")
      */
    public function acceuilAction(int $phoneId)
    {
      $phoneRepository = new PhoneRepository();

      $phones = $phoneRepository->findAllPhones();

      return $this->render('InnovationBundle:Phone:acceuilP.html.twig', [
          'phone' => $phones[$phoneId]
        ]);
    }
}
