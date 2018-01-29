<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\IteratorPattern\Aggregate\DinerMenu;
use App\IteratorPattern\Client\Waitress;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class IteratorPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:iterator-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for iterator pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the iterator pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $waitress = new Waitress(new DinerMenu());
        $waitress->printMenu();
        echo "the end\n";
    }
}
