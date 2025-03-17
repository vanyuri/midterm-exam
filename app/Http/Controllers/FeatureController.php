<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index() {
        $features = Feature::select('name', 'description')->get(); // Ensure 'description' is selected
        return view('features.index', compact('features'));
    }
    
}
