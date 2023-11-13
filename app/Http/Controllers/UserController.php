<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('mahasiswa.dashboard');
    }

    public function user_lomba()
    {
        $lomba = Lomba::where("name", 'like', "%" . Auth::user()->name . "%")->get();
        return view('mahasiswa.lomba', compact(['lomba']));
    }

    public function daftarkan_lomba()
    {
        return view('mahasiswa.add_lomba');
    }

    public function proses_daftarkan_lomba(Request $request)
    {
        Prestasi::create([
            'name' => $request->name,
            'npm' => $request->npm,
            'jurusan' => $request->jurusan,
            'juara' => $request->juara,
            'lomba' => $request->lomba,
            'penyelenggara' => $request->penyelenggara,
            'tingkat' => $request->tingkat,
            'tanggal' => $request->date,
        ]);
    }

    public function user_prestasi()
    {
        // Jika name dari table prestasi = name dari table users
        $kejuaraan = Prestasi::where("name", 'like', "%" . Auth::user()->name . "%")->get();
        return view('mahasiswa.prestasi', compact(['kejuaraan']) , [
            "title" => 'Perolehan Prestasi'
        ]);
    }

    public function profil($id)
    {
        $data = User::find($id);
        return view('mahasiswa.profil', compact(['data']));
    }

    public function update_profil(Request $request, $id)
    {
        $data = User::find($id);

        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'jurusan' => 'required',
            'username' => 'required',
            'password' => 'required|min:5|',
            'profil'  => 'image|mimes:jpeg,jpg,png|max:2048',
        ]);

        // Periksa apakah gambar profil baru diunggah
        if ($request->hasFile('profil')) {
            // Jika gambar profil baru diunggah, hapus yang lama
            $file = $data->profil;
            File::delete($file);

            // Unggah gambar profil baru
            $namafile = $request->profil->getClientOriginalName();
            $request->profil->move('pp_mahasiswa/', $namafile);

            // Perbarui profil dengan gambar baru
            $data->profil = 'pp_mahasiswa/' . $namafile;
        }

        // Perbarui informasi profil lainnya
        $data->name = $request->name;
        $data->email = $request->email;
        $data->gender = $request->gender;
        // $data->jurusan = $request->jurusan;
        $data->username = $request->username;
        $data->password = Hash::make($request->password);

        // Simpan perubahan
        if ($data->save()) {
            return redirect()->back()->with('sukses', 'Data Berhasil Diganti');
        } else {
            return redirect()->back()->with('error', 'Gagal mengupdate profil');
        }
    }

}



