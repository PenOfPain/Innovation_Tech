<?php

namespace InnovationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\EntityManagerInterface;
use InnovationBundle\Entity\Phone;

class DefaultController extends Controller
{
  public function createAction()
{

  /**
  * @Route("/phonex/{phoneId}", name="detail")
  */
  
    // you can fetch the EntityManager via $this->getDoctrine()
    // or you can add an argument to your action: createAction(EntityManagerInterface $em)
    $em = $this->getDoctrine()->getManager();

    $product = new Phone();
    $product->setName('Keyboard');
    $product->setPrice(1000);
    $product->setDescription('Last Phone 2017!');

    // tells Doctrine you want to (eventually) save the Product (no queries yet)
    $em->persist($product);

    // actually executes the queries (i.e. the INSERT query)
    $em->flush();

    return new Response('Saved new product with id '.$product->getId());
}

}
