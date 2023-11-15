<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request, $token = null)
    {
        return view ('auth.login')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function proses_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Tidak bisa login!')
                ->withInput()
                ->withErrors($validator);
        }

        $otentifikasi = $request->only('username','password');

            if (Auth::attempt($otentifikasi)) {
                $user = Auth::user();
                if ($user->level == 'admin') {
                    return redirect()->intended('admin')->with('sukses','Selamat datang, Admin!');
                } elseif ($user->level == 'user') {
                    return redirect()->intended('user')->with('sukses','Haloo! Selamat datang!');
                }
                return redirect()->intended('user')->with('sukses','Haloo! Selamat datang!');
            }

        return redirect('login')->with('eror','Masukkan username dan password yang benar');
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

    public function proses_register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'jurusan' => 'required',
            'gender' => 'required',
            'email' => ['required', 'unique:users'],
            'username' => ['required', 'unique:users'],
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Akun gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

            User::create([
                'name' => $request->name,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
        return redirect('login')->with('sukses','Berhasil Daftar');
    }

    public function send_request_reset(Request $request){

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|exists:users,email'
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Gagal mengirim email!')
                ->withInput()
                ->withErrors($validator);
        }

        $token = \Str::random(64);

        \DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('reset_password',['token'=>$token,'email'=>$request->email]);
        $body = "Kami menerima permintaan untuk reset password pada <b>SI Manajamen Prestasi</b> dengan email ".$request->email.
        ". Tekan link untuk reset password";

        \Mail::send('email-forgot',['action_link'=>$action_link,'body'=>$body], function($message) use ($request){
            $message->from('noreply@example.com','SI Manajemen Prestasi');
            $message->to($request->email,'SI Manajemen Prestasi')
                    ->subject('Reset Password');
        });
        return back()->with('sukses', 'Berhasil mengirim request reset password');
    }

    public function reset_password(Request $request, $token = null){
        return view('auth.reset_password')->with(['token'=>$token,'email'=>$request->email]);
    }

    public function update_password(Request $request){

        $validator = Validator::make($request->all(), [
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|confirmed',
            'password_confirmation'=>'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Gagal ubah password!')
                ->withInput()
                ->withErrors($validator);
        }

        $check_token = \DB::table('password_resets')->where([
            'email'=>$request->email,
            'token'=>$request->token,
        ])->first();

        if(!$check_token){
            return back()->withInput()->with('eror', 'Invalid Email');
        }else{

            User::where('email', $request->email)->update([
                'password'=>\Hash::make($request->password)
            ]);

            \DB::table('password_resets')->where([
                'email'=>$request->email
            ])->delete();

            return redirect()->route('login')->with('sukses', 'Password berhasil direset!');
        }
    }
}
