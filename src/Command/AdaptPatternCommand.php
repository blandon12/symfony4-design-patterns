<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\AdaptPattern\Duck\WildDuck;
use App\AdaptPattern\DuckGooseAdapt;
use App\AdaptPattern\Goose\WildGoose;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class AdaptPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:adapt-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for adapt pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the adapt pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wildDuck = new WildDuck();
        $wildDuck->quack();
        $wildDuck->fly();

        $duckGoose = new DuckGooseAdapt(new WildGoose());
        $duckGoose->quack();
        $duckGoose->fly();

        echo "the end\n";
    }
}
