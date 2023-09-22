<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $data = [];

        for ($i = 0; $i < 50000; $i++) {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'iq' =>  $faker->numberBetween(70, 200),
                'password' => bcrypt($faker->password),
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }

        $chunks = array_chunk($data, 5000);

        foreach ($chunks as $chunk) {
            User::insert($chunk);
        }
    }
}
