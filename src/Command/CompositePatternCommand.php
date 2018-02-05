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
use App\CompositePattern\Component\Menu;
use App\CompositePattern\Component\MenuItem;
use App\CompositePattern\Waitor;
use App\IteratorPattern\Client\Waitress;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CompositePatternCommand extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:composite-pattern')

            // the short description shown while running "php bin/console list"
            ->setDescription('Run command for composite pattern.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command shows how the composite pattern works')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $menuItem1 = new MenuItem('item1', 11.29, true);
        $menuItem2 = new MenuItem('item2', 2.33, false);
        $menuItem3 = new MenuItem('item3', 9.49, false);
        $menuItem4 = new MenuItem('item4', 12.53, false);
        $menu = new Menu('diner menu');
        $menu->add($menuItem1);
        $menu->add($menuItem2);
        $menu->add($menuItem3);
        $menu->add($menuItem4);

        $menuItem5 = new MenuItem('item5', 39.49, false);
        $menuItem6 = new MenuItem('item6', 42.53, false);
        $vipMenu = new Menu('vip menu');
        $vipMenu->add($menuItem5);
        $vipMenu->add($menuItem6);
        $menu->add($vipMenu);

        $waitor = new Waitor($menu);
        $waitor->printMenu();

        echo "\nthe end\n";
    }
}
