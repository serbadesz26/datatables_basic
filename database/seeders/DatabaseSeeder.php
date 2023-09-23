<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Phone;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call(UserTableSeeder::class);
        $totalInstances = 500000;
        $batchSize = 10000;
        $totalBatches = ceil($totalInstances / $batchSize);

        for ($i = 0; $i < $totalBatches; $i++) {
            Phone::factory()->count($batchSize)->create();
        }
    }
}
