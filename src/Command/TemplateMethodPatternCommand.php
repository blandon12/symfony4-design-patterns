<?php
/**
 * Created by PhpStorm.
 * User: chunxin.xu
 * Date: 13/12/2017
 * Time: 17:07
 */

namespace App\Command;

use App\TemplateMethodPattern\Coffee;
use App\TemplateMethodPattern\Tea;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class TemplateMethodPatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:template-method-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for template method pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the template method pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $coffee = new Coffee();
        $coffee->prepareRecipe();

        $tea = new Tea();
        $tea->prepareRecipe();
    }
}
