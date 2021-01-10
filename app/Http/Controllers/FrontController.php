<?php

namespace App\Http\Controllers;

use App\{HourOver, HourStart};
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontController extends Controller
{
    public function index()
    {
        return view('index');
    }

    // Admin
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function postLoginAdmin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('home.admin');
        } else {
            return redirect()->back()->with('error', 'Kami tidak mengenali Anda.');
        }
    }

    // Teacher
    public function loginTeacher()
    {
        return view('teacher.login');
    }

    public function postLoginTeacher(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('home.teacher');
        } else {
            return redirect()->back()->with('error', 'Kami Tidak dapat menemukan kredensial yang Anda masukkan.');
        }
    }
    public function hours()
    {
        $starts = HourStart::all();
        $overs  = HourOver::all();

        return view('teacher.working-hours', compact('starts', 'overs'));
    }
}
