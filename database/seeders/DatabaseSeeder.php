<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Dog;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $dogs = Dog::factory(100)->create();

        User::factory( 100)
            ->create()
            ->each(function($user) use($dogs) {
                $randomFields= $dogs->random( rand(1, 4) )->pluck('id');
                $user->dogs()->attach($randomFields);
            });
    }
}
