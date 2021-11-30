<?php

namespace App\Console\Commands;

use App\Models\Product;
use Illuminate\Console\Command;

class CreateNewProduct extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'create:product';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command a new product thought artisan';

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
      $title = $this->ask('What is the Product title?');
      $original_price = $this->ask('What is the Product price?');
      $in_stock = $this->ask('What is the Product stock?');

      Product::create([
        'title' => $title,
        'original_price' => $original_price,
        '$in_stock' => $in_stock
      ]);

    //   $this->comment('Product created has been successfully!');
        $this->info('Product has been successfully created');
        
        // return Command::SUCCESS;
    }
}
