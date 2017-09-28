<?php

namespace InnovationBundle\Repository;


class CategoryRepository
{
    public function findAllCategories(): array
    {
      $categories = [
          'Phones',
          'PC',
          'Drones',
          'Others',
      ];

      return $categories;

    }



}
