<?php

namespace App\Http\Controllers;

use App\Models\MealPlan;
use Illuminate\Http\Request;

class MealPlanController extends Controller
{
    public function index() {

        $mealplans = MealPlan::paginate(6);

        return view('healthyfoods/mealplan', [
            'mealplans' => $mealplans,
            'active' => 'healthy_foods',
        ]);
    }

    public function detail_mealplan(MealPlan $mealplan) {
        return view('healthyfoods/mealplan_detail', [
            'mealplan' => $mealplan,
            'active' => 'healthy_foods',
        ]);
    }

    public function download(Mealplan $mealplan) {
        $filepath = public_path("assets/images/mealplan/poster/" . $mealplan->poster);
        return response()->download($filepath);
    }
}
