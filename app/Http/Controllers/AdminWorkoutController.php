<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\Suggestion;
use App\Models\WorkoutCategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminWorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Menampilkan halaman dasboard admin untuk mengedit workout
     */
    public function index()
    {
        $workouts = Workout::all()->sortByDesc('created_at');
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.workouts.index', [
            'active' => 'workouts',
            'messages' => $messages,
            'workouts' => $workouts,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     *
     * Menampilkan halaman admin untuk membuat workout
     * Tampian berupa form yang akan di isi oleh admin untuk membuat workout baru
     */
    public function create()
    {
        $categories = WorkoutCategory::all()->sortByDesc('created_at');
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.workouts.create', [
            'active' => 'workouts',
            'messages' => $messages,
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     *
     * Untuk meng-input isian form ke database ddengan menerapkan beberapa validasi dan juga mengarahkan/memindahkan file gambar ke dalam folder public->assets->images->workout
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:programs,slug',
            'category' => 'required',
            'file_cover' => 'required|max:4096',
            'file_poster' => 'required|max:2048',
        ]);

        $coverFileName = time() . '.' . $request->file('file_cover')->extension();
        $request->file('file_cover')->move(public_path('assets/images/workout/cover/'), $coverFileName);

        $posterFileName = time() . '.' . $request->file('file_poster')->extension();
        $request->file('file_poster')->move(public_path('assets/images/workout/poster/'), $posterFileName);

        $workout = new Workout();
        $workout->name = $validatedData['name'];
        $workout->slug = $validatedData['slug'];
        $workout->category_id = $validatedData['category'];
        $workout->photo = $coverFileName;
        $workout->poster = $posterFileName;

        $workout->save();

        return redirect('dashboard/workouts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     *
     * Menampilkan  form edit workout
     */
    public function edit(Workout $workout)
    {
        $categories = WorkoutCategory::all();
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.workouts.edit', [
            'active' => 'workouts',
            'messages' => $messages,
            'categories' => $categories,
            'workout' => $workout,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     *
     * Mengupdate database dengan menerapkan validasi tertentu
     */
    public function update(Request $request, Workout $workout)
    {
        $rules = [
            'name' => 'required',
            'category' => 'required',
        ];

        if ($request->slug != $workout->slug) {
            $rules['slug'] = 'required|unique:programs,slug';
        }

        if ($request->file_cover != null) {
            $rules['file_cover'] = 'required|max:4096';
        }

        if ($request->file_poster != null) {
            $rules['file_poster'] = 'required|max:2048';
        }

        $validatedData = $request->validate($rules);
        $updateField['name'] = $validatedData['name'];
        $updateField['category_id'] = $validatedData['category'];

        if ($request->slug != $workout->slug) {
            $updateField['slug'] = $validatedData['slug'];
        }

        if ($request->file_cover != null) {
            $fileNameCover = time() . '.' . $request->file('file_cover')->extension();
            $request->file('file_cover')->move(public_path('assets/images/workout/cover'), $fileNameCover);

            $oldCoverPath = public_path('assets/images/workout/cover/') . $workout->photo;
            File::delete($oldCoverPath);

            $updateField['photo'] = $fileNameCover;
        }

        if ($request->file_poster != null) {
            $fileNamePoster = time() . '.' . $request->file('file_poster')->extension();
            $request->file('file_poster')->move(public_path('assets/images/workout/poster'), $fileNamePoster);

            $oldPosterPath = public_path('assets/images/workout/poster/') . $workout->poster;
            File::delete($oldPosterPath);

            $updateField['poster'] = $fileNamePoster;
        }

        Workout::where('id', $workout->id)
            ->update($updateField);

        return redirect('dashboard/workouts');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     *
     * Destroy untuk menghapus workout dalam database dan juga menghapus file dalam folder public
     */
    public function destroy(Workout $workout)
    {
        $coverPath = public_path('assets/images/workout/cover/') . $workout->photo;
        $posterPath = public_path('assets/images/workout/poster/') . $workout->poster;
        File::delete($coverPath, $posterPath);
        Workout::destroy($workout->id);

        return redirect('dashboard/workouts');
    }
}
