<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingpageController extends Controller
{
    public function index()
    {
        return view('layouts.landingpage');
    }

    public function data_prestasi(Request $request)
    {
        $kejuaraan = Prestasi::get();
        return view('landingpage.data_prestasi', compact(['kejuaraan']));
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
