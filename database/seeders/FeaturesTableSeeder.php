<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Feature;

class FeaturesTableSeeder extends Seeder
{
    public function run()
    {
        $features = [
            ['name' => 'Model', 'description' => 'Represents database tables as PHP classes in Laravel.'],
            ['name' => 'View', 'description' => 'Handles the UI and presentation logic using Blade templates.'],
            ['name' => 'Controller', 'description' => 'Acts as the controller or middleman of Model and View'],
            ['name' => 'Routes', 'description' => 'Defines URLs and their corresponding controllers.'],
            ['name' => 'Middleware', 'description' => 'Handles HTTP requests filtering like authentication.'],
            ['name' => 'Blade Templates', 'description' => 'A powerful templating engine for views.'],
            ['name' => 'Migrations', 'description' => 'Manages database schema changes.'],
            ['name' => 'Seeders', 'description' => 'Populates the database with sample data.'],
            ['name' => 'Database', 'description' => 'Handles database connections.'],
            ['name' => 'Eloquent ORM', 'description' => 'Provides an Active Record implementation for databases.'],
        ];

        Feature::insert($features);
    }
}
