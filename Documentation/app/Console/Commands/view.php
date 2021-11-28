<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class view extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:view';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'creating a new view';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {

        $path = $this->getPath();

        $generator = new Generator($this->getConfig(), $path);

        $generator->generate(
            (new BlockStack)->build($this->input, $path)
        );

        $this->info('View created successfully');
        return Command::SUCCESS;
    }
}
