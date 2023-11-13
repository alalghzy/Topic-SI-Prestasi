<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Lomba;
use App\Models\Prestasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Validator;


class AdminController extends Controller
{
    public function index()
    {
        $data_mahasiswa = User::where('level', 'mahasiswa')->count();
        $data_lomba     = Lomba::count();
        $data_prestasi  = Prestasi::count();

        $get_mahasiswa  = User::latest()->where('level', 'mahasiswa')->paginate(50);
        $get_lomba      = Lomba::whereNotNull('sertifikat')->orderBy('tanggal', 'desc')->paginate(50);
        $get_prestasi   = Prestasi::latest()->paginate(50);

        $lomba_jan      = Lomba::whereMonth('tanggal' , '01')->count();
        $lomba_feb      = Lomba::whereMonth('tanggal' , '02')->count();
        $lomba_maret    = Lomba::whereMonth('tanggal' , '03')->count();
        $lomba_april    = Lomba::whereMonth('tanggal' , '04')->count();
        $lomba_mei      = Lomba::whereMonth('tanggal' , '05')->count();
        $lomba_juni     = Lomba::whereMonth('tanggal' , '06')->count();
        $lomba_juli     = Lomba::whereMonth('tanggal' , '07')->count();
        $lomba_agust    = Lomba::whereMonth('tanggal' , '08')->count();
        $lomba_sep      = Lomba::whereMonth('tanggal' , '09')->count();
        $lomba_okt      = Lomba::whereMonth('tanggal' , '10')->count();
        $lomba_nov      = Lomba::whereMonth('tanggal' , '11')->count();
        $lomba_des      = Lomba::whereMonth('tanggal' , '12')->count();

        $prestasi_jan   = Prestasi::whereMonth('tanggal' , '01')->count();
        $prestasi_feb   = Prestasi::whereMonth('tanggal' , '02')->count();
        $prestasi_maret = Prestasi::whereMonth('tanggal' , '03')->count();
        $prestasi_april = Prestasi::whereMonth('tanggal' , '04')->count();
        $prestasi_mei   = Prestasi::whereMonth('tanggal' , '05')->count();
        $prestasi_juni  = Prestasi::whereMonth('tanggal' , '06')->count();
        $prestasi_juli  = Prestasi::whereMonth('tanggal' , '07')->count();
        $prestasi_agust = Prestasi::whereMonth('tanggal' , '08')->count();
        $prestasi_sep   = Prestasi::whereMonth('tanggal' , '09')->count();
        $prestasi_okt   = Prestasi::whereMonth('tanggal' , '10')->count();
        $prestasi_nov   = Prestasi::whereMonth('tanggal' , '11')->count();
        $prestasi_des   = Prestasi::whereMonth('tanggal' , '12')->count();

        $lomba_perbulan = [
            $lomba_jan, $lomba_feb, $lomba_maret, $lomba_april, $lomba_mei, $lomba_juni,
            $lomba_juli, $lomba_agust, $lomba_sep, $lomba_okt, $lomba_nov, $lomba_des,
        ];

        $prestasi_perbulan = [
            $prestasi_jan, $prestasi_feb, $prestasi_maret, $prestasi_april, $prestasi_mei, $prestasi_juni,
            $prestasi_juli, $prestasi_agust, $prestasi_sep, $prestasi_okt, $prestasi_nov, $prestasi_des,
        ];

        $dataGrafik = [
            'xAxis' => [
                'type' => 'category',
                'data' => ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
            ],
            'yAxis' => [
                'type' => 'value',
                'axisLabel' => [
                    'formatter' => '{value}',
                ],
            ],
            'series' => [
                [
                    'name' => 'Lomba',
                    'data' => $lomba_perbulan,
                    'type' => 'line',
                    'smooth' => true,
                ],
                [
                    'name' => 'Prestasi',
                    'data' => $prestasi_perbulan,
                    'type' => 'line',
                    'smooth' => true,
                ],
            ],
            'tooltip' => [
                'trigger' => 'axis',
                'formatter' => '<b>{b0}:</b> Lomba: {c0} Prestasi: {c1}',
            ],
        ];

        return view('admin.dashboard', compact
        ([
            'data_lomba','data_prestasi', 'dataGrafik', 'data_mahasiswa', 'get_mahasiswa', 'get_lomba', 'get_prestasi',
            'lomba_jan','lomba_feb','lomba_maret','lomba_april','lomba_mei','lomba_juni',
            'lomba_juli','lomba_agust','lomba_sep','lomba_okt','lomba_nov','lomba_des',
            'prestasi_jan','prestasi_feb','prestasi_maret','prestasi_april','prestasi_mei','prestasi_juni',
            'prestasi_juli','prestasi_agust','prestasi_sep','prestasi_okt','prestasi_nov','prestasi_des',

        ]));
    }

    public function profil($id)
    {
        $data = User::find($id);
        return view('admin.profil' , compact(['data']));
    }

    public function update_profil(Request $request, $id)
    {
        $data = User::find($id);

        $validasi = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            // 'jurusan' => 'required',
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
            $request->profil->move('profil/', $namafile);

            // Perbarui profil dengan gambar baru
            $data->profil = 'profil/' . $namafile;
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


    public function mahasiswa(Request $request)
    {
        $items = User::where('level', 'mahasiswa')->get();
        return view('admin.mahasiswa', compact(['items']) , [
            "title" => 'Manajemen Mahasiswa'
        ]);
    }

    public function create_mahasiswa(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'jurusan' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'username' => 'required',
            'password' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        try {
            User::create([
                'name' => $request->name,
                'jurusan' => $request->jurusan,
                'gender' => $request->gender,
                'email' => $request->email,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);

            return redirect()->route('mahasiswa')->with('sukses','Data Berhasil Ditambahkan');
        } catch (QueryException $e) {
            return back()
                ->with('failed', 'Terjadi kesalahan saat menambahkan data.')
                ->withInput();
        }
    }

    public function update_mahasiswa(Request $request, $id)
    {
        $items = User::find($id);
        $lomba = Lomba::where('npm', $items['username'])->get();

        $request['password'] = Hash::make($request->password);
        $items->update($request->all());

        foreach ($lomba as $key => $value) {
            $lomba[$key]->update([
                'jurusan' => $request->jurusan,
            ]);
        }

        return redirect()->route('mahasiswa')->with('sukses','Data berhasil diedit');
    }

    public function delete_mahasiswa($id){
        $data = User::find($id);
        $lomba = null;

        if (Lomba::where('npm', $data['username'])->first() != null) {
            $lomba = Lomba::where('npm', $data['username'])->first();
            $lomba->delete();
        }

        $data->delete();

        return redirect()->route('mahasiswa')->with('sukses','Data Berhasil Dihapus');
    }

}

