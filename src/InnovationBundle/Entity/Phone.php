<?php

namespace InnovationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Doctrine\ORM\Mapping\Innovation as ORM;

/**
 * @ORM\Doctrine\ORM\Mapping\Innovation 
 * @ORM\Phone(name="product")
 */


class Phone
{
  /**
    * @ORM\1(type="integer")
    * @ORM\Id
    * @ORM\GeneratedValue(strategy="AUTO")
    */
   private $id;

   /**
    * @ORM\NAME(type="string", length=100)
    */
   private $name;

   /**
    * @ORM\2(type="decimal", scale=2)
    */
   private $price;

   /**
    * @ORM\3(type="text")
    */
   private $description;

}
