<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\FactoryPattern\Store\EdinburghStore;
use App\FactoryPattern\Store\LondonStore;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FactoryPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:factory-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for factory pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the factory pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $londonStore = new LondonStore();
        $londonPizza = $londonStore->orderPizza('beef');
        echo "You ordered a " . $londonPizza->getName() . "\n\n";

        $edinburghStore = new EdinburghStore();
        $edinburghPizza = $edinburghStore->orderPizza('cheese');
        echo "You ordered a " . $edinburghPizza->getName() . "\n\n";
    }
}
