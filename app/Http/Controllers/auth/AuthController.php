<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {

        //   validator $request->validate([

        $emailExist = User::emailExist($request->email);
        if (!$emailExist) {

            return response()->json([
                'status' => 'error',
                'message' => 'Email is incorrect',
            ], 200);
        }
        // login
        if (auth()->attempt(['email' => $request->email, 'password' => $request->password])) {
            return response()->json([
                'status' => 'success',
                'message' => 'Login successfully',
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Password is incorrect',
            ], 200);
        }

    }

    public function register()
    {
        return view('auth.register');
    }
    public function registerPost(Request $request)
    {

    }
    public function  logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
