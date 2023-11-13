<?php

namespace App\Http\Controllers;

use App\Models\Lomba;
use App\Models\Prestasi;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PrestasiController extends Controller
{
// Route Admin
    public function index()
    {
        $kejuaraan = Prestasi::sortable()->get();
        return view('admin.prestasi', compact(['kejuaraan']));
    }

    public function admin_update_prestasi(Request $request, $id)
    {
        $kejuaraan = Prestasi::find($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'npm' => 'required',
            'jurusan' => 'required',
            'lomba' => 'required',
            'juara' => 'required',
            'penyelenggara' => 'required',
            'tingkat' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return back()
                ->with('failed', 'Data gagal ditambahkan!')
                ->withInput()
                ->withErrors($validator);
        }

        $cek = [
                'name' => $request->name,
                'npm' => $request->npm,
                'jurusan' => $request->jurusan,
                'juara' => $request['juara'],
                'lomba' => $request['lomba'],
                'penyelenggara' => $request['penyelenggara'],
                'tingkat' => $request['tingkat'],
                'tanggal' => $request['date'],
            ];


        if($kejuaraan->update($cek)){
            $kejuaraan->save();
        }

        return redirect()->route('prestasi')->with('sukses','Data Berhasil Diedit');
    }

    public function admin_delete_prestasi($id){
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->route('prestasi')->with('sukses','Data Berhasil Dihapus');
    }

    public function perolehan_prestasi($id)
    {
        $lomba = Lomba::find($id);
        return view('admin.perolehan_prestasi',compact(['lomba']) , [
            "title" => 'Manajemen Lomba'
        ]);
    }

    public function konfirmasi_lomba(Request $request, $id){
        $lomba = Lomba::find($id);
        Prestasi::create(
            [
                'name' => $lomba->name,
                'npm' => $lomba->npm,
                'jurusan' => $lomba->jurusan,
                'juara' => $request->juara,
                'lomba' => $lomba->lomba,
                'penyelenggara' => $lomba->penyelenggara,
                'tingkat' => $lomba->tingkat,
                'tanggal' => $lomba->tanggal,
            ]
        );

        $lomba->status = $request->status;
        $lomba->save();
            return redirect()->route('lomba')->with('sukses','Prestasi Dikonfirmasi');
    }

    public function download(){
        $kejuaraan = Prestasi::all();
        return view('data_prestasi_pdf', compact(['kejuaraan']));
    }

 public function user_download(){
    $kejuaraan = Prestasi::where("name", Auth::user()->name)->get();
    $pdf = PDF::loadview('data_prestasi_pdf' , compact(['kejuaraan']));
    $pdf->setPaper('A4', 'potrait');
    return $pdf->download('Data-Prestasi.pdf');
}


}


