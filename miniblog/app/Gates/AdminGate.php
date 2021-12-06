<?php

namespace App\Gate;


class AdminGate
{

    public function check_admin($user)
    {
        // Gate::define('isAdmin', function ($user) {
        if ($user->email === 'admin@gmail.com') {
            return true;
        } else {
            return false;
        }
    }

}
