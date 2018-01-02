<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\SingletonPattern\SingletonPattern;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SingletonPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:singleton-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for singleton pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the singleton pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        SingletonPattern::getInstance();

        echo "complete to create the first boiler\n";

        SingletonPattern::getInstance();

        echo "the end\n";
    }
}
