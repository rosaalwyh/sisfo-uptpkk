<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Announcements_categories;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengumumanKategoriController extends Controller
{
    //
    protected $table = 'announcement_categories';
    public function index()
    {
        $data['title'] = 'Data Kategori Pengumuman';
        $data['data_kategori'] = Announcements_categories::all();
        return view('backend.pengumuman.kategori.data_kategori', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Kategori Pengumuman';
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'kategori_nama' => 'required',
            ]);
            $insert = [
                'kategori_nama' => $request->kategori_nama,
                'kategori_slug' =>  SlugService::createSlug(Announcements_categories::class, 'kategori_slug', $request->kategori_nama),
            ];
            Announcements_categories::insertGetId($insert);
            return redirect('PNKategori')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.pengumuman.kategori.create_kategori', $data);
        }
    }



    public function update(Request $request)
    {
        $data['title'] = 'Update Data Kategori Pengumuman';
        if (isset($_POST['submit'])) {
            $kategori = Announcements_categories::find($request->kategori_id);
            $kategori->kategori_nama = $request->kategori_nama;
            $kategori->kategori_slug =  SlugService::createSlug(Announcements_categories::class, 'kategori_slug', $request->kategori_nama);
            $kategori->save();
            return redirect('PNKategori')->with('success', 'Data berhasil diubah!');
        } else {
            $data['data_kategori'] = Announcements_categories::where('kategori_id', $request->kategori_id)->get();
            return view('backend.pengumuman.kategori.update_kategori', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('kategori_id', $request->kategori_id)->delete();
        if ($delete) {
            return redirect('PNKategori')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('PNKategori')->with('failed', 'Data gagal dihapus!');
        }
    }
}
