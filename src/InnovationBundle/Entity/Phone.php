<?php

namespace InnovationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Innovation
 * @ORM\Phone(name="product")
 */


class Phone
{
  /**
    * @ORM\Column(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @ORM\Column(type="string", length=100)
    */
   private $name;

   /**
    * @ORM\Column(type="decimal", scale=2)
    */
   private $price;

   /**
    * @ORM\Column(type="text")
    */
   private $description;

}