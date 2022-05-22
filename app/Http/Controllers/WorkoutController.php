<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use Illuminate\Http\Request;
use App\Models\WorkoutCategory;

//Class untuk Workout
class WorkoutController extends Controller
{
    //Method untuk pemanggilan halaman utama workout
    public function index()
    {

        $active = 'workout';

        return view('workout.workout', [
            'active' => $active,
        ]);
    }

    //Method untuk pemanggilan halaman kategoi
    public function category(WorkoutCategory $category)
    {
        //paginate untuk menampilkan 6 kegiatan perhalaman
        $workout = Workout::where('category_id', $category->id)->paginate(6);
        $data = [
            1 => [
                'title' => 'Easy Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
            2 => [
                'title' => 'Medium Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
            3 => [
                'title' => 'Hard Workout',
                'description' => 'Silahkan cari tempat yang nyaman supaya Anda dapat melakukan workout dengan baik. Pilih workout sesuai keinginan
                kemudian ikuti gerakan workout sesuai arahan yang kami sediakan. Selamat berolahraga! Salam sehat!'
            ],
        ];

        return view('workout.category', [
            'active' => 'workout',
            'data' => $data[$category->id],
            'workouts' => $workout,
        ]);
    }

    //Method untuk pemanggilan halaman detail workout
    public function show(Workout $workout) {
        return view('workout.workoutdetail', [
            'active' => 'workout',
            'workouts' => $workout,
        ]);
    }

    //Method untuk mendownload file
    public function download($id) {
        $data = Workout::where('id', $id)->first();
        $filepath = public_path("assets/images/workout/poster/{$data->poster}");
        return response()->download($filepath);
    }
}
