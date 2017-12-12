<?php
namespace App\Command;

use App\ObserverPattern\Observer\CurrentConditionsDisplay;
use App\ObserverPattern\Observer\StatisticsDisplay;
use App\ObserverPattern\Subject\WeatherData;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ObserverPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:observer-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for observer pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the observer pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $weatherData = new WeatherData();
        new CurrentConditionsDisplay($weatherData);
        new StatisticsDisplay($weatherData);
        $weatherData->setMeasurements(9.50, 55.99);
    }
}