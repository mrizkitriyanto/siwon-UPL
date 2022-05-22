<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\ProgramCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProgramsController extends Controller
{
    public function index()
    {

        $active = 'programs';

        return view('programs.programs', [
            'active' => $active,
        ]);
    }

    public function category(ProgramCategory $category)
    {
        $programs = Program::where('category_id', '=', $category->id)->paginate(6);
        $data = [
            1 => [
                'title' => 'Program 1 Minggu',
                'description' => 'Ikut berbagai program olahraga yang dapat dilakukan di manapun dengan durasi latihan selama satu minggu.'
            ],
            2 => [
                'title' => 'Program 1 Bulan',
                'description' => 'Dapatkan berbagai program latihan yang  mudah untuk di ikuti dalam durasi selama satu bulan'
            ],
            3 => [
                'title' => 'Program 3 Bulan',
                'description' => 'Ikuti berbagai program olahraga yang dapat dilakukan di manapun dengan durasi latihan selama tiga bulan.'
            ],
        ];

        return view('programs.category', [
            'active' => 'programs',
            'data' => $data[$category->id],
            'programs' => $programs,
        ]);
    }

    public function show(Program $program)
    {
        $active = 'programs';

        if (auth()->user() != null) {
            $progress = DB::table('records')->where('user_id', '=', auth()->user()->id)->where('program_id', '=', $program->id)->get();
        } else {
            $progress = '';
        }


        return view('programs.detail', [
            'program' => $program,
            'active' => $active,
            'progress' => $progress,
        ]);
    }

    public function download(Program $program)
    {
        $filepath = public_path("assets/images/program/poster/" . $program->poster);
        return response()->download($filepath);
    }

    public function check(Request $request)
    {
        if ($request->status == 'true') {
            DB::table('records')->insert([
                'user_id' => $request->user,
                'program_id' => $request->program,
                'day' => $request->day,
            ]);
        } else {
            DB::table('records')
                ->where('user_id', '=', $request->user)
                ->where('program_id', '=', $request->program)
                ->where('day', '=', $request->day)
                ->delete();
        }
    }
}
