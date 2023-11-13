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
        return view('landingpage.data_prestasi', compact(['kejuaraan']), [
            "title" => 'Prestasi'
        ]);
    }

    public function berita()
    {
        return view('landingpage.berita', [
            "title" => 'Berita'
        ]);
    }

    public function postingan()
    {
        return view('landingpage.postingan', [
            "title" => 'Berita'
        ]);
    }

    public function visi_misi()
    {
        return view('landingpage.visi_misi', [
            "title" => 'Visi Misi'
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return Redirect('/');
    }
}
