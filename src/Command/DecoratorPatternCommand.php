<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\DecoratorPattern\Component\Espresso;
use App\DecoratorPattern\Decorator\Milk;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class DecoratorPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:decorator-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for decorator pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the decorator pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $drink = new Milk(new Espresso());
        echo 'My order is ' . $drink->getDescription() . ' and the price is ' . $drink->cost();
    }
}
