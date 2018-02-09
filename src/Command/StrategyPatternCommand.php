<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\SingletonPattern\SingletonPattern;
use App\StrategyPattern\Duck\WildDuck;
use App\StrategyPattern\Fly\FlyWithWing;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class StrategyPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:strategy-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for strategy pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the strategy pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wildDuck = new WildDuck();
        $wildDuck->setFly(new FlyWithWing());
        $wildDuck->display();
        $wildDuck->fly();

        echo "the end\n";
    }
}
