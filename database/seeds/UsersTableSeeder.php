<?php

use Illuminate\Database\Seeder;
use App\Models\User;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Chevalier',
            'email' => 'tony@tatoumi.com',
            'role' => 'admin',
            'password' => password_hash('SeRunIs*974', PASSWORD_DEFAULT),
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'demo',
            'email' => 'demo@societe.com',
            'password' => password_hash('user1', PASSWORD_DEFAULT),
            'email_verified_at' => Carbon::now(),
        ]);
        User::create([
            'name' => 'User1',
            'email' => 'user1@societe.com',
            'password' => password_hash('user1', PASSWORD_DEFAULT),
            'email_verified_at' => Carbon::now(),
        ]);
    }
}
