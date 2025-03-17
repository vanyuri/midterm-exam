<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    public function run()
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
