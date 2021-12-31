<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'itpollob',
            'email' => 'pollob@apphs.com',
            'password' => 'pollob123',
           
        ]);
    }
}
