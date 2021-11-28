<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class hellow extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hello {name} {--L| firstname=mahim}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $name = $this->argument('name');
        $lname = $this->option('lastname');
        $this->info($name . '' . $lname);

        return Command::SUCCESS;
    }
}
