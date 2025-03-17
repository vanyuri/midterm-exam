<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeaturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            ['name' => 'Model', 'description' => ''],
            ['name' => 'View', 'description' => ''],
            ['name' => 'Controller', 'description' => ''],
            ['name' => 'Routes', 'description' => ''],
            ['name' => 'Middleware', 'description' => ''],
            ['name' => 'Blade Templates', 'description' => ''],
            ['name' => 'Migrations', 'description' => ''],
            ['name' => 'Sessions', 'description' => ''],
            ['name' => 'Database', 'description' => ''],
            ['name' => 'Eloquent ORM', 'description' => ''],
            ];
            
            foreach ($features as $feature) {
            Feature::create($feature);
            }
    }
}
