<?php

use App\Contact;
use App\User;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::truncate();
        User::orderBy('id')->chunk(100, function($users) {
            foreach ($users as $user) {
                factory(Contact::class, 20)->create([
                    'user_id' => $user->id
                ]);
            }
        });
    }
}
