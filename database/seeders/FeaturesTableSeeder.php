<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        $features = [
            ['name' => 'Model', 'description' => 'Defines the data structure and interacts with the database.'],
            ['name' => 'View', 'description' => 'Handles the UI and presentation logic using Blade templates.'],
            ['name' => 'Controller', 'description' => 'Manages application logic and interactions.'],
            ['name' => 'Routes', 'description' => 'Defines URL endpoints and their associated controllers or actions.'],
            ['name' => 'Middleware', 'description' => 'Filters HTTP requests, such as authentication and logging.'],
            ['name' => 'Blade Templates', 'description' => 'Laravel’s templating engine for rendering dynamic views.'],
            ['name' => 'Migrations', 'description' => 'Handles database schema changes like creating or updating tables.'],
            ['name' => 'Seeders', 'description' => 'Fills the database with sample or default data for testing or development.'],
            ['name' => 'Database', 'description' => 'Stores and manages structured data using Laravel’s database features.'],
            ['name' => 'Eloquent ORM', 'description' => 'Provides an Active Record implementation for database interactions.'],
        ];

        foreach ($features as $feature) {
            Feature::create($feature);
        }
    }
}
