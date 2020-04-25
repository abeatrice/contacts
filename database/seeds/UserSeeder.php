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
        User::truncate();
        factory(User::class)->create([
            'name' => 'user',
            'email' => 'user@mail.com'
        ]);
        factory(User::class)->create([
            'name' => 'user2',
            'email' => 'user2@mail.com'
        ]);
    }
}
