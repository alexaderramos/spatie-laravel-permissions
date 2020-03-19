<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Alexander R',
            'email_verified_at' => now(),
            'password' => bcrypt('123123123'), // password
            'email'=>'admin@admin.com',
        ]);
        factory(User::class, 5)->create();
    }
}
