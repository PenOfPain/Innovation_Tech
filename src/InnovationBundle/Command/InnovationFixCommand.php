<?php

namespace InnovationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class InnovationFixCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('innovation:fix')
            ->setDescription('...')
<<<<<<< HEAD
            ->addArgument('argument', InputArgument::OPTIONAL, 'Argument description')
            ->addOption('option', null, InputOption::VALUE_NONE, 'Option description')
=======
>>>>>>> master
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
<<<<<<< HEAD
        $argument = $input->getArgument('argument');

        if ($input->getOption('option')) {
            // ...
        }

        $output->writeln('Command result.');
=======


      $product = new Phone();
      $product->setName('Keyboard');
      $product->setPrice(1000);
      $product->setDescription('Last Phone 2017!');

      $em = $this->getContainer()->get('doctrine.arm.entity_manageer');

      // tells Doctrine you want to (eventually) save the Product (no queries yet)
      $em->persist($product);

      // actually executes the queries (i.e. the INSERT query)
      $em->flush();

      return new Response('Saved new product with id '.$product->getId());


        $output->writeln('its working');
>>>>>>> master
    }

}
