<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramCategory;
use App\Models\Suggestion;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AdminProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programs = Program::all()->sortByDesc('created_at');
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);

        return view('dashboard.program.program', [
            'active' => 'programs',
            'messages' => $messages,
            'programs' => $programs,
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
        $categories = ProgramCategory::all();

        return view('dashboard.program.create', [
            'active' => 'programs',
            'messages' => $messages,
            'categories' => $categories,
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
            'slug' => 'required|unique:programs,slug',
            'category' => 'required',
            'description' => 'required',
            'file_cover' => 'required|max:4096',
            'file_poster' => 'required|max:2048',
        ]);

        $coverFileName = time() . '.' . $request->file('file_cover')->extension();
        $request->file('file_cover')->move(public_path('assets/images/program/cover/'), $coverFileName);

        $posterFileName = time() . '.' . $request->file('file_poster')->extension();
        $request->file('file_poster')->move(public_path('assets/images/program/poster/'), $posterFileName);

        $program = new Program();
        $program->name = $validatedData['name'];
        $program->slug = $validatedData['slug'];
        $program->category_id = $validatedData['category'];
        $program->description = $validatedData['description'];
        $program->photo = $coverFileName;
        $program->poster = $posterFileName;

        $program->save();

        return redirect('dashboard/program');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        $messages = Suggestion::all()->sortByDesc('created_at')->take(4);
        $categories = ProgramCategory::all();

        return view('dashboard.program.edit', [
            'active' => 'programs',
            'messages' => $messages,
            'categories' => $categories,
            'program' => $program,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        $rules = [
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
        ];


        if ($request->slug != $program->slug) {
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
        $updateField['description'] = $validatedData['description'];
        $updateField['category_id'] = $validatedData['category'];

        if ($request->slug != $program->slug) {
            $updateField['slug'] = $validatedData['slug'];
        }

        if ($request->file_cover != null) {
            $fileNameCover = time() . '.' . $request->file('file_cover')->extension();
            $request->file('file_cover')->move(public_path('assets/images/program/cover'), $fileNameCover);

            $oldCoverPath = public_path('assets/images/program/cover/') . $program->photo;
            File::delete($oldCoverPath);

            $updateField['photo'] = $fileNameCover;
        }

        if ($request->file_poster != null) {
            $fileNamePoster = time() . '.' . $request->file('file_poster')->extension();
            $request->file('file_poster')->move(public_path('assets/images/program/poster'), $fileNamePoster);

            $oldPosterPath = public_path('assets/images/program/poster/') . $program->poster;
            File::delete($oldPosterPath);

            $updateField['poster'] = $fileNamePoster;
        }

        Program::where('id', $program->id)
            ->update($updateField);

        return redirect('dashboard/program');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $coverPath = public_path('assets/images/program/cover/') . $program->photo;
        $posterPath = public_path('assets/images/program/poster/') . $program->poster;
        File::delete($coverPath, $posterPath);
        Program::destroy($program->id);

        return redirect('dashboard/program');
    }
}
