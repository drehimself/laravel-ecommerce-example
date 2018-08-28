<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name' => 'Andre',
            'email' => 'andre@andre.com',
            'password' => bcrypt('password'),
        ]);

        factory(App\User::class, 50)->create()->each(function ($user) {
            $user->created_at = \Carbon\Carbon::now()->addDays(rand(-180, 0));
            $user->save();
        });
    }
}
