<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\SeminarKarir;
use App\Models\SeminarKewirausahaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SeminarKewirausahaanController extends Controller
{
    //
    protected $table = 'seminar_kewirausahaans';

    public function index()
    {
        $data['title'] = 'Data Seminar Kewirausahaan';
        $data['data_seminar'] = SeminarKewirausahaan::all();
        return view('backend.kewirausahaan.seminar.data_seminar', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'seminar_judul'   =>  'required',
                'seminar_penulis' =>  'required',
                'seminar_konten'  =>  'required',
                'seminar_tanggal' =>  'required'
            ]);
            if($request->hasFile('seminar_foto')){
                $destination_path = 'public/seminar_kewirausahaan';
                $seminar_foto = $request->file('seminar_foto');
                $seminar_foto_name = $seminar_foto->getClientOriginalName();
                $path = $request->file('seminar_foto')->storeAs($destination_path, $seminar_foto_name);
            }
            $histories = [
                'seminar_judul'    =>  $request->seminar_judul,
                'seminar_penulis'    =>  $request->seminar_penulis,
                'seminar_konten'    =>  $request->seminar_konten,
                'seminar_tanggal'    =>  $request->seminar_tanggal,
                'seminar_foto'      => $seminar_foto_name
            ];
            SeminarKewirausahaan::create($histories);
            return redirect('seminar-kewirausahaan')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Sejarah';
            return view('backend.kewirausahaan.seminar.create_seminar', $data);
        }
    }

    public function update(Request $request)
    {
        // dd($request);
        if (isset($_POST['submit'])) {
            if (isset($request->seminar_foto)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('seminar_foto')){
                    $destination_path = 'public/seminar_kewirausahaan';
                    $seminar_foto = $request->file('seminar_foto');
                    $seminar_foto_name = $seminar_foto->getClientOriginalName();
                    $path = $request->file('seminar_foto')->storeAs($destination_path, $seminar_foto_name);
                }
                $seminar = SeminarKewirausahaan::find($request->id);
                $seminar->seminar_judul = $request->seminar_judul;
                $seminar->seminar_penulis = $request->seminar_penulis;
                $seminar->seminar_konten = $request->seminar_konten;
                $seminar->seminar_tanggal = $request->seminar_tanggal;
                $seminar->seminar_foto = $seminar_foto_name;
                $seminar->save();
            } else {
                $seminar = SeminarKewirausahaan::find($request->id);
                $seminar->seminar_judul = $request->seminar_judul;
                $seminar->seminar_penulis = $request->seminar_penulis;
                $seminar->seminar_konten = $request->seminar_konten;
                $seminar->seminar_tanggal = $request->seminar_tanggal;
                $seminar->save();
            }
            return redirect('seminar-kewirausahaan')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Seminar Kewirausahaan';
            $data['data_seminar'] = SeminarKewirausahaan::where('id', $request->id)->get();
            return view('backend.kewirausahaan.seminar.update_seminar', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('id', $request->id)->delete();
        if ($delete) {
            return redirect('seminar-kewirausahaan')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('seminar-kewirausahaan')->with('failed', 'Data gagal dihapus!');
        }
    }
}
