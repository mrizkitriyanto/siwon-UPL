<?php

namespace App\Http\Controllers;

use App\Models\FoodRecipe;
use App\Models\Suggestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminFoodRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);
        $recipes = FoodRecipe::all()->sortByDesc('created_at');

        return view('dashboard.recipe.recipe', [
            'active' => 'recipe',
            'messages' => $messages,
            'recipes' => $recipes,
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


        return view('dashboard.recipe.create', [
            'active' => 'recipe',
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
            'slug' => 'required|unique:food_recipes,slug',
            'description' => 'required',
            'file_cover' => 'required|max:2048',
            'file_poster' => 'required|max:2048',
        ]);

        $coverFileName = time() . '.' . $request->file('file_cover')->extension();
        $request->file('file_cover')->move(public_path('assets/images/foodrecipe/cover'), $coverFileName);

        $posterFileName = time() . '.' . $request->file('file_poster')->extension();
        $request->file('file_poster')->move(public_path('assets/images/foodrecipe/poster'), $posterFileName);

        $recipe = new FoodRecipe();
        $recipe->name = $validatedData['name'];
        $recipe->slug = $validatedData['slug'];
        $recipe->description = $validatedData['description'];
        $recipe->photo = $coverFileName;
        $recipe->poster = $posterFileName;

        $recipe->save();

        return redirect('dashboard/foodrecipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function show(FoodRecipe $foodrecipe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function edit(FoodRecipe $foodrecipe)
    {
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.recipe.edit', [
            'active' => 'recipe',
            'messages' => $messages,
            'recipe' => $foodrecipe,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FoodRecipe $foodrecipe)
    {
        // Create validation rules
        $rules = [
            'name' => 'required',
            'description' => 'required',
        ];

        if ($request->slug != $foodrecipe->slug) {
            $rules['slug'] = 'required|unique:food_recipes,slug';
        }

        if ($request->file_cover != null) {
            $rules['file_cover'] = 'required|max:2048';
        }

        if ($request->file_poster != null) {
            $rules['file_poster'] = 'required|max:2048';
        }

        $validatedData = $request->validate($rules);
        $updateField['name'] = $validatedData['name'];
        $updateField['description'] = $validatedData['description'];

        if ($request->slug != $foodrecipe->slug) {
            $updateField['slug'] = $request->slug;
        }

        if ($request->file_cover != null) {
            $fileNameCover = time() . '.' . $request->file('file_cover')->extension();
            $request->file('file_cover')->move(public_path('assets/images/foodrecipe/cover'), $fileNameCover);

            $oldCoverPath = public_path('assets/images/foodrecipe/cover/') . $foodrecipe->photo;
            File::delete($oldCoverPath);

            $updateField['photo'] = $fileNameCover;
        }

        if ($request->file_poster != null) {
            $fileNamePoster = time() . '.' . $request->file('file_poster')->extension();
            $request->file('file_poster')->move(public_path('assets/images/foodrecipe/poster'), $fileNamePoster);

            $oldPosterPath = public_path('assets/images/foodrecipe/poster/') . $foodrecipe->poster;
            File::delete($oldPosterPath);

            $updateField['poster'] = $fileNamePoster;
        }

        FoodRecipe::where('id', $foodrecipe->id)
            ->update($updateField);

        return redirect('dashboard/foodrecipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FoodRecipe  $foodRecipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(FoodRecipe $foodrecipe)
    {
        $coverPath = public_path('assets/images/foodrecipe/cover/') . $foodrecipe->photo;
        $posterPath = public_path('assets/images/foodrecipe/poster/') . $foodrecipe->poster;
        File::delete($coverPath, $posterPath);

        FoodRecipe::destroy($foodrecipe->id);

        return redirect('dashboard/foodrecipe');
    }
}
