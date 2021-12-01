<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Histories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SejarahController extends Controller
{
    protected $table = 'histories';
    //
    public function index()
    {
        $data['title'] = 'Data Sejarah';
        $data['data_sejarah'] = Histories::all();
        return view('backend.sejarah.data_sejarah', $data);
    }

    public function create(Request $request)
    {
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'sejarah_konten'    =>  'required'
            ]);
            if($request->hasFile('sejarah_foto')){
                $destination_path = 'public/sejarah';
                $sejarah_foto = $request->file('sejarah_foto');
                $sejarah_foto_name = $sejarah_foto->getClientOriginalName();
                $path = $request->file('sejarah_foto')->storeAs($destination_path, $sejarah_foto_name);
            }
            $histories = [
                'sejarah_konten'    =>  $request->sejarah_konten,
                'sejarah_foto'      => $sejarah_foto_name
            ];
            Histories::create($histories);
            return redirect('sejarah')->with('success', 'Data berhasil ditambah');
        } else {
            $data['title'] = 'Data Sejarah';
            return view('backend.sejarah.create_sejarah', $data);
        }
    }

    public function update(Request $request)
    {
        if (isset($_POST['submit'])) {
            if (isset($request->sejarah_foto)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('sejarah_foto')){
                    $destination_path = 'public/sejarah';
                    $sejarah_foto = $request->file('sejarah_foto');
                    $sejarah_foto_name = $sejarah_foto->getClientOriginalName();
                    $path = $request->file('sejarah_foto')->storeAs($destination_path, $sejarah_foto_name);
                }
                $sejarah = Histories::find($request->sejarah_id);
                $sejarah->sejarah_konten = $request->sejarah_konten;
                $sejarah->sejarah_foto = $sejarah_foto_name;
                $sejarah->save();
            } else {
                $sejarah = Histories::find($request->sejarah_id);
                $sejarah->sejarah_konten = $request->sejarah_konten;
                $sejarah->save();
            }
            return redirect('sejarah')->with('success', 'Data berhasil diubah!');
        } else {
            $data['title'] = 'Update Sejarah';
            $data['data_sejarah'] = Histories::where('sejarah_id', $request->sejarah_id)->get();
            return view('backend.sejarah.update_sejarah', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('sejarah_id', $request->sejarah_id)->delete();
        if ($delete) {
            Storage::delete([$request->sejarah_foto]);
            return redirect('sejarah')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('sejarah')->with('failed', 'Data gagal dihapus!');
        }
    }
}
