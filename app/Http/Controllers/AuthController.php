<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web')->except('do_logout');
    }
    public function index()
    {
        return view('pages.auth.login');
    }
    public function register()
    {
        return view('pages.auth.register');
    }
    public function do_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|max:255',
            'password' => 'required|min:8',
        ]);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'error',
                'message' => $errors->first(),
            ]);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if ($user->role == 'admin') {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Selamat Datang ' . Auth::user()->name,
                        'redirect' => route('admin.dashboard'),
                    ]);
                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Maaf, password anda salah.',
                    ]);
                }
            } elseif ($user->role == 'operator') {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Selamat Datang ' . Auth::user()->name,
                        'redirect' => route('operator.dashboard'),
                    ]);
                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Maaf, password anda salah.',
                    ]);
                }
            } else {
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                    return response()->json([
                        'status' => 'success',
                        'message' => 'Selamat Datang ' . Auth::user()->name,
                        'redirect' => route('web.dashboard'),
                    ]);
                } else {
                    return response()->json([
                        'status' => 'error',
                        'message' => 'Maaf, password anda salah.',
                    ]);
                }
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Maaf, Akun belum terdaftar.',
            ]);
        }
    }
    public function do_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
        ]);

        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'status' => 'error',
                'message' => $errors->first(),
            ]);
        }

        $user = new User;
        $user->name = explode(' ', $request->fullname)[0];
        $user->fullname = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return response()->json([
            'status' => 'success',
            'message' => 'Registrasi Berhasil',
            'redirect' => route('auth.index'),
        ]);
    }
    public function do_logout()
    {
        $user = Auth::user();
        Auth::logout($user);
        return redirect('dashboard')->with('success', 'Berhasil Logout');
    }
}
