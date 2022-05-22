<?php

namespace App\Http\Controllers;

use App\Models\MealPlan;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminMealPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mealplans = MealPlan::all()->sortByDesc('created_at');
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.mealplans.mealplans', [
            'active' => 'mealplan',
            'mealplans' => $mealplans,
            'messages' => $messages,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.mealplans.create', [
            'active' => 'mealplan',
            'messages' => $messages,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:meal_plans,slug',
            'file_cover' => 'required|max:2048',
            'file_poster' => 'required|max:2048',
        ]);

        $posterFileName = time() . '.' . $request->file('file_poster')->extension();
        $request->file('file_poster')->move(public_path('assets/images/mealplan/poster'), $posterFileName);

        $coverFileName = time() . '.' . $request->file('file_cover')->extension();
        $request->file('file_cover')->move(public_path('assets/images/mealplan/cover'), $coverFileName);

        $save = new MealPlan();

        $save->name = $validatedData['name'];
        $save->slug = $validatedData['slug'];
        $save->photo = $coverFileName;
        $save->poster = $posterFileName;

        MealPlan::create([
            'name' => $save->name,
            'slug' => $save->slug,
            'photo' => $save->photo,
            'poster' => $save->poster,
        ]);

        return redirect('dashboard/mealplan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function show(MealPlan $mealplan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function edit(MealPlan $mealplan)
    {
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.mealplans.edit', [
            'active' => 'mealplan',
            'messages' => $messages,
            'recipe' => $mealplan,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MealPlan $mealplan)
    {
        // Create validation rules
        $rules = [
            'name' => 'required',
        ];

        if ($request->slug != $mealplan->slug) {
            $rules['slug'] = 'required|unique:meal_plans,slug';
        }

        if ($request->file_cover != null) {
            $rules['file_cover'] = 'required|max:2048';
        }

        if ($request->file_poster != null) {
            $rules['file_poster'] = 'required|max:2048';
        }

        $validatedData = $request->validate($rules);
        $updateField['name'] = $validatedData['name'];

        if ($request->slug != $mealplan->slug) {
            $updateField['slug'] = $request->slug;
        }

        if ($request->file_cover != null) {
            $fileNameCover = time() . '.' . $request->file('file_cover')->extension();
            $request->file('file_cover')->move(public_path('assets/images/mealplan/cover'), $fileNameCover);

            $oldCoverPath = public_path('assets/images/mealplan/cover/') . $mealplan->photo;
            File::delete($oldCoverPath);

            $updateField['photo'] = $fileNameCover;
        }

        if ($request->file_poster != null) {
            $fileNamePoster = time() . '.' . $request->file('file_poster')->extension();
            $request->file('file_poster')->move(public_path('assets/images/mealplan/poster'), $fileNamePoster);

            $oldPosterPath = public_path('assets/images/mealplan/poster/') . $mealplan->poster;
            File::delete($oldPosterPath);

            $updateField['poster'] = $fileNamePoster;
        }

        MealPlan::where('id', $mealplan->id)
            ->update($updateField);

        return redirect('dashboard/mealplan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MealPlan  $mealPlan
     * @return \Illuminate\Http\Response
     */
    public function destroy(MealPlan $mealplan)
    {
        $coverPath = public_path('assets/images/mealplan/cover/') . $mealplan->photo;
        $posterPath = public_path('assets/images/mealplan/poster/') . $mealplan->poster;
        File::delete($coverPath, $posterPath);
        MealPlan::destroy($mealplan->id);

        return redirect('dashboard/mealplan');
    }
}
