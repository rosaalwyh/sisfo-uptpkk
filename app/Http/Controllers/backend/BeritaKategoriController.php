<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News_categories;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaKategoriController extends Controller
{
    //
    protected $table = 'news_categories';

    public function index()
    {
        $data['title'] = 'Data Kategori Berita';
        $data['data_kategori'] = News_categories::all();
        return view('backend.berita.kategori.data_kategori', $data);
    }

    public function create(Request $request)
    {
        $data['title']  = 'Form Kategori Berita';
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'kategori_nama' => 'required',
            ]);
            $insert = [
                'kategori_nama' => $request->kategori_nama,
                'kategori_slug' =>  SlugService::createSlug(News_categories::class, 'kategori_slug', $request->kategori_nama),
            ];
            News_categories::insertGetId($insert);
            return redirect('BRKategori')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.berita.kategori.create_kategori', $data);
        }
    }

    public function update(Request $request)
    {
        $data['title'] = 'Update data kategori berita';
        if (isset($_POST['submit'])) {
            $kategori = News_categories::find($request->kategori_id);
            $kategori->kategori_nama = $request->kategori_nama;
            $kategori->kategori_slug =  SlugService::createSlug(News_categories::class, 'kategori_slug', $request->kategori_nama);
            $kategori->save();
            return redirect('BRKategori')->with('success', 'Data berhasil diubah!');
        } else {
            $data['data_kategori'] = News_categories::where('kategori_id', $request->kategori_id)->get();
            return view('backend.berita.kategori.update_kategori', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('kategori_id', $request->kategori_id)->delete();
        if ($delete) {
            return redirect('BRKategori')->with('success', 'Data berhasil dihapus!');
        } else {
            return redirect('BRKategori')->with('failed', 'Data gagal dihapus!');
        }
    }
}
