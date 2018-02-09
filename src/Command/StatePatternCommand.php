<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 09/02/2018
 * Time: 10:26
 */

namespace App\Command;

use App\StatePattern\GumballMachine\GumballMachine;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StatePatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:state-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for state pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the state pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $gumballMachine = new GumballMachine(3);
        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->dispense();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->dispense();

        $gumballMachine->insertQuarter();
        $gumballMachine->turnCrank();
        $gumballMachine->dispense();

        $gumballMachine->insertQuarter();

        echo "\nthe end\n";
    }
}