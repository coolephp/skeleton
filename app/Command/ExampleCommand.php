<?php

/*
 * This file is part of the coolephp/skeleton.
 *
 * (c) guanguans <ityaozm@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace App\Command;

use Guanguans\Coole\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    protected $name = 'example';

    protected $description = 'This is a example for command.';

    protected $options = [
        ['echo', null, InputOption::VALUE_OPTIONAL, 'echo input option.', 'option'],
    ];

    protected $arguments = [
        ['echo', InputArgument::OPTIONAL, 'echo input argument.', 'argument'],
    ];

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->output->writeln($this->input->getArgument('echo'));
        $this->output->writeln($this->input->getOption('echo'));

        return parent::SUCCESS;
    }
}
