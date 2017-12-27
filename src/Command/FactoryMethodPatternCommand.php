<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\FactoryMethodPattern\Store\EdinburghStore;
use App\FactoryMethodPattern\Store\LondonStore;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FactoryMethodPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:factory-method-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for factory method pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the factory method pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $londonStore = new LondonStore();
        $londonStore->orderPizza('beef');

        $edinburghStore = new EdinburghStore();
        $edinburghStore->orderPizza('cheese');
    }
}
