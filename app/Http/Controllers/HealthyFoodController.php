<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use Illuminate\Http\Request;

class HealthyFoodController extends Controller
{
    public function index()
    {
        $recipes = FoodRecipe::all('name', 'slug', 'photo', 'created_at')->sortByDesc('created_at')->take(4);
        
        return view('healthyfoods.index', [
            'active' => 'healthy_foods',
            'recipes' => $recipes,
        ]);
    }

    public function foodrecipe()
    {

        $recipes = FoodRecipe::paginate(6);

        return view('healthyfoods.recipe', [
            'active' => 'healthy_foods',
            'recipes' => $recipes,
        ]);
    }

    public function show_recipe(FoodRecipe $foodrecipe)
    {   
        return view('healthyfoods.recipe_detail', [
            'active' => 'healthy_foods',
            'recipe' => $foodrecipe,
        ]);
    }

    public function download(FoodRecipe $foodrecipe) {
        $filepath = public_path("assets/images/foodrecipe/poster/" . $foodrecipe->poster);
        return response()->download($filepath);
    }
}
