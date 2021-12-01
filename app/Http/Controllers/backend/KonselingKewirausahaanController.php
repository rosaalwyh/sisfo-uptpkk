<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\KonselingKewirausahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class KonselingKewirausahaanController extends Controller
{
    //
    protected $table = 'konseling_kewirausahaans';

    public function index()
    {
        $data['title'] = 'Data Konseling Kewirausahaan';
        $data['data_konseling'] = KonselingKewirausahaan::all();
        return view('backend.kewirausahaan.konseling.data_konseling', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'konseling_judul'   =>  'required',
                'konseling_penulis' =>  'required',
                'konseling_konten'  =>  'required',
                'konseling_tanggal' =>  'required'
            ]);
            if($request->hasFile('konseling_foto')){
                $destination_path = 'public/konseling_kewirausahaan';
                $konseling_foto = $request->file('konseling_foto');
                $konseling_foto_name = $konseling_foto->getClientOriginalName();
                $path = $request->file('konseling_foto')->storeAs($destination_path, $konseling_foto_name);
            }
            $konseling = [
                'konseling_judul'    =>  $request->konseling_judul,
                'konseling_penulis'    =>  $request->konseling_penulis,
                'konseling_konten'    =>  $request->konseling_konten,
                'konseling_tanggal'    =>  $request->konseling_tanggal,
                'konseling_foto'      => $konseling_foto_name
            ];
            KonselingKewirausahaan::create($konseling);
            return redirect('konseling-kewirausahaan')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Konseling Kewirausahaan';
            return view('backend.kewirausahaan.konseling.create_konseling', $data);
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        if (isset($_POST['submit'])) {
            if (isset($request->konseling_foto)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('konseling_foto')){
                    $destination_path = 'public/konseling_kewirausahaan';
                    $konseling_foto = $request->file('konseling_foto');
                    $konseling_foto_name = $konseling_foto->getClientOriginalName();
                    $path = $request->file('konseling_foto')->storeAs($destination_path, $konseling_foto_name);
                }
                $konseling = KonselingKewirausahaan::find($request->id);
                $konseling->konseling_judul = $request->konseling_judul;
                $konseling->konseling_penulis = $request->konseling_penulis;
                $konseling->konseling_konten = $request->konseling_konten;
                $konseling->konseling_tanggal = $request->konseling_tanggal;
                $konseling->konseling_foto = $konseling_foto_name;
                $konseling->save();
            } else {
                $konseling = KonselingKewirausahaan::find($request->id);
                $konseling->konseling_judul = $request->konseling_judul;
                $konseling->konseling_penulis = $request->konseling_penulis;
                $konseling->konseling_konten = $request->konseling_konten;
                $konseling->konseling_tanggal = $request->konseling_tanggal;
                $konseling->save();
            }
            return redirect('konseling-kewirausahaan')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Konseling Kewirausahaan';
            $data['data_konseling'] = KonselingKewirausahaan::where('id', $request->id)->get();
            return view('backend.kewirausahaan.konseling.update_konseling', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('id', $request->id)->delete();
        if ($delete) {
            return redirect('konseling-kewirausahaan')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('konseling-kewirausahaan')->with('failed', 'Data gagal dihapus!');
        }
    }
}
