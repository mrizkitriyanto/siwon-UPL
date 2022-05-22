<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Models\User;

class ForgotPasswordController extends Controller
{
    public function index()
    {
        return view('auth/forgot-password', [
            'active' => '',
        ]);
    }

    public function forgot(Request $request)
    {
        $request->validate([
            'email' => 'email:dns|required|exists:users,email',
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('email.forgot_password', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return back()->with('forgot-message', '<div class="alert alert-success" role="alert">Silakan periksa email anda.</div>');
    }

    public function reset_password($token)
    {
        return view('auth.reset-password', [
            'active' => '',
            'token' => $token,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'email:dns|required',
            'password' => 'required|min:6',
            'confirm-password' => 'required|same:password',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'token' => $request->token,
            ])
            ->first();

        if (!$updatePassword) {
            return back();
        }

        $user = User::where('email', $request->email)->update(['password' => bcrypt($request->password)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/auth/login')->with('login-message', '<div class="alert alert-success" role="alert">Password berhasil direset, silakan login.</div>');
    }
}
