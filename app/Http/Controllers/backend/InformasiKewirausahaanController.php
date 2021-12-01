<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\InformasiKewirausahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class InformasiKewirausahaanController extends Controller
{
    //
    protected $table = 'informasi_kewirausahaans';

    public function index()
    {
        $data['title'] = 'Data Informasi Kewirausahaan';
        $data['data_informasi'] = InformasiKewirausahaan::all();
        return view('backend.kewirausahaan.informasi.data_informasi', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {

            if($request->hasFile('informasi_foto')){
                $destination_path = 'public/informasi_kewirausahaan';
                $informasi_foto = $request->file('informasi_foto');
                $informasi_foto_name = $informasi_foto->getClientOriginalName();
                $path = $request->file('informasi_foto')->storeAs($destination_path, $informasi_foto_name);
            }
            
            $this->validate($request, [
                'informasi_judul'   =>  'required',
                'informasi_penulis' =>  'required',
                'informasi_konten'  =>  'required',
                'informasi_tanggal' =>  'required'
            ]);
           
            $informasi = [
                'informasi_judul'    =>  $request->informasi_judul,
                'informasi_penulis'    =>  $request->informasi_penulis,
                'informasi_konten'    =>  $request->informasi_konten,
                'informasi_tanggal'    =>  $request->informasi_tanggal,
                'informasi_foto'      => $informasi_foto_name
            ];
            InformasiKewirausahaan::create($informasi);
            return redirect('informasi-kewirausahaan')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Informasi Kewirausahaan';
            return view('backend.kewirausahaan.informasi.create_informasi', $data);
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        if (isset($_POST['submit'])) {
            if (isset($request->informasi_foto)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('informasi_foto')){
                    $destination_path = 'public/informasi_kewirausahaan';
                    $informasi_foto = $request->file('informasi_foto');
                    $informasi_foto_name = $informasi_foto->getClientOriginalName();
                    $path = $request->file('informasi_foto')->storeAs($destination_path, $informasi_foto_name);
                }
                $informasi = InformasiKewirausahaan::find($request->id);
                $informasi->informasi_judul = $request->informasi_judul;
                $informasi->informasi_penulis = $request->informasi_penulis;
                $informasi->informasi_konten = $request->informasi_konten;
                $informasi->informasi_tanggal = $request->informasi_tanggal;
                $informasi->informasi_foto = $informasi_foto_name;
                $informasi->save();
            } else {
                $informasi = InformasiKewirausahaan::find($request->id);
                $informasi->informasi_judul = $request->informasi_judul;
                $informasi->informasi_penulis = $request->informasi_penulis;
                $informasi->informasi_konten = $request->informasi_konten;
                $informasi->informasi_tanggal = $request->informasi_tanggal;
                $informasi->save();
            }
            return redirect('informasi-kewirausahaan')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Informasi Kewirausahaan';
            $data['data_informasi'] = InformasiKewirausahaan::where('id', $request->id)->get();
            return view('backend.kewirausahaan.informasi.update_informasi', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('id', $request->id)->delete();
        if ($delete) {
            return redirect('informasi-kewirausahaan')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('informasi-kewirausahaan')->with('failed', 'Data gagal dihapus!');
        }
    }
}
