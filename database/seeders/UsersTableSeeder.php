<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
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
        $faker = Factory::create();
        $password = bcrypt('123123');

        User::create([
           'name' => $faker->name,
           'email' => 'admin@demo.com',
           'password' => $password
        ]);

        for ($i = 0; $i < 10; $i++) {

            User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $password
            ]);
        }

    }
}
