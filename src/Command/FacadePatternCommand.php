<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\FacadePattern\Amplifier;
use App\FacadePattern\DvdPlayer;
use App\FacadePattern\HomeTheaterFacade;
use App\FacadePattern\Screen;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class FacadePatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:facade-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for facade pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the facade pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $facade = new HomeTheaterFacade(new Screen(), new DvdPlayer(), new Amplifier());
        $facade->watchMovie();

        echo "the end\n";
    }
}
