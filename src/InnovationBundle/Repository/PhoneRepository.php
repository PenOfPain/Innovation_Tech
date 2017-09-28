<?php

namespace InnovationBundle\Repository;


class PhoneRepository
{
    public function findAllPhones(): array
    {
      $phones = [
          'IphoneX',
          'SamsungS8',
          'Iphone8',
          'Nokia Android Phones',
      ];

      return $phones;

    }



}
