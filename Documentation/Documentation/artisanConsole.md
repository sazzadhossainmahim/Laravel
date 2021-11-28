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
