{
    :composer require pusher/pusher-php-server
    <!-- interact with pusher -->
    composer require pusher/pusher-php-server --with-all-dependencies
    pusher.com
    set up to evn file

    >
    php artisan make:event MassageNotification

    app.php 

    <!-- Laravel Echo  -->
    npm install pusher-js laravel-echo --save
    yarn add install pusher-js laravel-echo --save
    >web:

    Route::get('/event', funciton(){
        event(new MessageNotification('This is first broadcast messagge!'));
    });

    Route::get('/listen', function(){
        return view('listen');
    });

}
