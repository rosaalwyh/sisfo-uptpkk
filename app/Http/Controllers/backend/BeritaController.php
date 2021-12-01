<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\News_categories;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    protected $table = 'news';
    public function index()
    {
        $data['title'] = 'Data Berita';
        $data['data_berita'] = DB::table($this->table)
            ->join('news_categories', 'news.berita_kategori', '=', 'news_categories.kategori_id')
            ->get();
        return view('backend.berita.data_berita', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Berita';
        $data['data_kategori'] = News_categories::all();
        if (isset($_POST['submit'])) {
            if($request->hasFile('berita_sampul')){
                $destination_path = 'public/berita_sampul';
                $berita_sampul = $request->file('berita_sampul');
                $berita_sampul_name = $berita_sampul->getClientOriginalName();
                $path = $request->file('berita_sampul')->storeAs($destination_path, $berita_sampul_name);
            }
            $this->validate($request, [
                'berita_judul'      => 'required',
                'berita_konten'     => 'required',
                'berita_status'     =>  'required',
                'berita_kategori'   =>  'required'
            ]);
            $insert = [
                'berita_judul'      => $request->berita_judul,
                'berita_slug'       => SlugService::createSlug(News::class, 'berita_slug', $request->berita_judul),
                'berita_konten'     => $request->berita_konten,
                'berita_sampul'     => $berita_sampul_name,
                'berita_author'     =>  Auth::user()->user_id,
                'berita_status'     =>  $request->berita_status,
                'berita_kategori'   =>  $request->berita_kategori
            ];
            News::insertGetId($insert);
            return redirect('berita')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.berita.create_berita', $data);
        };
    }

    public function update(Request $request)
    {
        $data['title'] = 'Update data berita';
        if (isset($_POST['submit'])) {
            if (isset($request->berita_sampul)) {
                Storage::delete([$request->sampul]);
                if($request->hasFile('berita_sampul')){
                    $destination_path = 'public/berita_sampul';
                    $berita_sampul = $request->file('berita_sampul');
                    $berita_sampul_name = $berita_sampul->getClientOriginalName();
                    $path = $request->file('berita_sampul')->storeAs($destination_path, $berita_sampul_name);
                }
                $news = News::find($request->berita_id);
                $news->berita_judul      = $request->berita_judul;
                $news->berita_slug       = SlugService::createSlug(News::class, 'berita_slug', $request->berita_judul);
                $news->berita_konten     = $request->berita_konten;
                $news->berita_sampul     = $berita_sampul_name;
                $news->berita_author     = Auth::user()->user_id;
                $news->berita_status     =  $request->berita_status;
                $news->berita_kategori   =  $request->berita_kategori;
                $news->save();
            } else {
                $id_user = Auth::user()->user_id;
                $news = News::find($request->berita_id);
                $news->berita_judul      = $request->berita_judul;
                $news->berita_slug       = SlugService::createSlug(News::class, 'berita_slug', $request->berita_judul);
                $news->berita_konten     = $request->berita_konten;
                $news->berita_author     =  $id_user;
                $news->berita_status     =  $request->berita_status;
                $news->berita_kategori   =  $request->berita_kategori;
                $news->save();
            }
            return redirect('berita')->with('success', 'Data berhasil diubah!');
        } else {
            $data['data_berita'] = News::where('berita_id', $request->berita_id)->get();
            $data['data_kategori'] = News_categories::all();
            return view('backend.berita.update_berita', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('berita_id', $request->berita_id)->delete();
        if ($delete) {
            Storage::delete([$request->sampul]);
            return redirect('berita')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('berita')->with('failed', 'Data gagal diahapus!');
        }
    }
}
