---------------------------------Steps--------------------------------


Install Hero Icons
> php artisan config:clear
> composer require blade-ui-kit/blade-ui-kit
<!-- configuration -->
php artisan vendor:publish --tag=blade-ui-kit-config 

search zondicons/zondicon-layers
> composer require blade-ui-kit/blade-zondicons
> composer require blade-ui-kit/blade-s-sun


<!-- Setup configuration -->

1. Update User Model 
-Have 3 types of users (Default User, Moderator, Administrator)
-create method 
2.Update database schema for Users

In User.php model--------------------------------

    const DEFAULT = 1;
    const MODARATOR = 2;
    const ADMIN = 3;
     protected $table= 'users';
    public function type():int
    {
        return (int) $this->type;
    }


<!-- Database configuration and migration -->
edit models 
 

    public function email(): string
    {
        return $this->email();
    }
    

<!-- User Policy Configuration and Migration -->
-create user policy
>php artisan make:policy policyname 
-middleware create
>php artisan make:middleware name
./AuthServiceProvider  -> Registration

 <!--Controller  -->
 >php artisan make:controller name
    public function single()
    {
        return view('threads.show');
    }

    public function create()
    {
        return view('threads.create');
    }

    public function users()
    {
        return view('admin.users.index');
    }

    public function categoriesIndex()
    {
        return view('admin.categories.index');
    }

    public function categoriesCreate()
    {
        return view('admin.categories.create');
    }

    public function threadsIndex()
    {
        return view('admin.threads.index');
    }


                    <!--    Redirect Users Based on Type -->

create Response folder under app 
>loginResponse
 >>>>
    <?php 

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        if(auth()->user()->isAdmin()){
            return redirect()->route('admin.index');
        }
        return redirect()->intended(config('fortify.home'));
    }
}


     --> bind to the FortifyServiceProvider with

    public function register()
    {
        //
        // >>>>>>>>>>>>>>>>>>>
        $this->app->bind(
            LoginResponseContacts::class,
            LoginResponse::class,
        );
    }



>>>> Create admin route file views
----->  route/admin.php
<?php


use Illuminate\support\Facades\Route;

Route::group(['prefix', 'admin', 'as' => 'admin'], function(){
    
});


>>>make a controller 
php artisan make:controller Admin/Dashboard

Register into kernal

protected $routeMiddle >>>>>'isAdmin'


