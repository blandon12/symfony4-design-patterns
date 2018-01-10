<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\CommandPattern\Command\FanHighCommand;
use App\CommandPattern\Command\FanLowCommand;
use App\CommandPattern\Command\FanOffCommand;
use App\CommandPattern\Command\LightOffCommand;
use App\CommandPattern\Command\LightOnCommand;
use App\CommandPattern\Receiver\Fan;
use App\CommandPattern\Receiver\Light;
use App\CommandPattern\RemoteControl;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CommandPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:command-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for command pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the command pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $remoteControl = new RemoteControl();
        $lightOnCommand = new LightOnCommand(new Light('bedroom'));
        $lightOffCommand = new LightOffCommand(new Light('bedroom'));


        $remoteControl->setCommand(0, $lightOnCommand, $lightOffCommand);

        $remoteControl->toString();

        $remoteControl->offButtonWasPushed(0);
        $remoteControl->onButtonWasPushed(0);

        $remoteControl->undoButtonWasPushed();

        $fanHighCommand = new FanHighCommand(new Fan('Living Room'));
        $fanLowCommand = new FanLowCommand(new Fan('Living Room'));
        $fanOffCommand = new FanOffCommand(new Fan('Living Room'));

        $remoteControl->setCommand(1, $fanHighCommand, $fanOffCommand);
        $remoteControl->setCommand(2, $fanLowCommand, $fanOffCommand);

        $remoteControl->toString();

        $remoteControl->onButtonWasPushed(2);
        $remoteControl->offButtonWasPushed(1);
        $remoteControl->onButtonWasPushed(1);

        $remoteControl->undoButtonWasPushed();
    }
}
