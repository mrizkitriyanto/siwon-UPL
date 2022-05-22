<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use Illuminate\Http\Request;
use App\Models\MealPlan;
use App\Models\Suggestion;
use App\Models\Workout;
use App\Models\Program;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $count_meal_plan = MealPlan::all()->count();
        $count_resep_makanan = FoodRecipe::all()->count();

        $count_data = [
            'workout' => Workout::all()->count(),
            'programs' => Program::all()->count(),
            'healthy_foods' => $count_meal_plan + $count_resep_makanan,
            'users' => User::all()->where('is_admin', 0)->count(),
        ];

        $suggestions = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard/index', [
            'active' => 'dashboard',
            'counter' => $count_data,
            'messages' => $suggestions,
        ]);
    }
}
