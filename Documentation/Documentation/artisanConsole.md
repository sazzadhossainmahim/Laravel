Artisan Console

{
    To view a list of all available Artisan commands, you may use the list command:

    >php artisan list

    
}


{
    
//  php artisan config:clear

Route::get('clear-config', function (){
    Artisan::call('config:clear');
    return "Config Cleared";
});

Route::get('cache-cache', function (){
    Artisan::call('config:cache');
    return "Config Settings Updated";
});



}

{
    php artisan clear-compiled
    : remove laravel's compiled class file

    php artisan down 
    : maintenance mode  

    php artisan up 
    : working method

    php artisan env

    php artisan --version

    php artisan --env

    php artisan optimize 

    php artisan cache:clear 

    php artisan key:generate



}
{
    for custom command 

    php artisan make:command name  

    php artisan make:command name  --command=create:name

}

{
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
        // return Command::SUCCESS;
    }
}

{
        public function handle()
    {

        print_r(Product::all()->toArray());
        // return Command::SUCCESS;
    }
}
