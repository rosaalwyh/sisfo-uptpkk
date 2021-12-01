<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Visi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class VisiMisiController extends Controller
{
    //
    protected $table = 'visi';
    public function index()
    {
        $data['title'] = 'Visi dan Misi';
        $data['data_visimisi'] = Visi::all();
        return view('backend.visimisi.data_visimisi', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Visi Misi';
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'visi_konten' => 'required',
                'misi_konten' => 'required',
                'tujuan_konten' => 'required'
            ]);
            if($request->hasFile('visi_foto')){
                $destination_path = 'public/visimisi';
                $visi_foto = $request->file('visi_foto');
                $visi_foto_name = $visi_foto->getClientOriginalName();
                $path = $request->file('visi_foto')->storeAs($destination_path, $visi_foto_name);
            }
            Visi::create([
                'visi_konten'   => $request->visi_konten,
                'misi_konten' => $request->misi_konten,
                'tujuan_konten' => $request->tujuan_konten,
                'visi_foto'     => $visi_foto_name,
            ]);
            return redirect('visimisi')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.visimisi.create_visimisi', $data);
        }
    }

    public function update(Request $request)
    {
        if (isset($_POST['submit'])) {
            if (isset($request->visi_foto)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('visi_foto')){
                    $destination_path = 'public/visimisi';
                    $visi_foto = $request->file('visi_foto');
                    $visi_foto_name = $visi_foto->getClientOriginalName();
                    $path = $request->file('visi_foto')->storeAs($destination_path, $visi_foto_name);
                }
                $visi = Visi::find($request->visi_id);
                $visi->visi_konten = $request->visi_konten;
                $visi->misi_konten = $request->misi_konten;
                $visi->tujuan_konten = $request->tujuan_konten;
                $visi->visi_foto = $visi_foto_name;
                $visi->save();
            } else {
                $visi = Visi::find($request->visi_id);
                $visi->visi_konten = $request->visi_konten;
                $visi->misi_konten = $request->misi_konten;
                $visi->tujuan_konten = $request->tujuan_konten;
                $visi->save();
            }
            return redirect('visimisi')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Visi Misi';
            $data['data_visimisi'] = Visi::where('visi_id', $request->visi_id)->get();
            return view('backend.visimisi.update_visimisi', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('visi_id', $request->visi_id)->delete();
        if ($delete) {
            Storage::delete([$request->visi_foto]);
            return redirect('visimisi')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('visimisi')->with('failed', 'Data gagal dihapus!');
        }
    }
}
