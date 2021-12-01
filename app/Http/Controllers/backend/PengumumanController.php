<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Announcements;
use App\Models\Announcements_categories;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PengumumanController extends Controller
{
    //
    protected $table = 'announcements';

    public function index()
    {
        $data['title'] = 'Data Pengumuman';
        $data['data_pengumuman'] = DB::table($this->table)
            ->join('announcement_categories', 'announcements.pengumuman_kategori', '=', 'announcement_categories.kategori_id')
            ->get();
        return view('backend.pengumuman.data_pengumuman', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Pengumuman';
        $data['data_kategori'] = Announcements_categories::all();
        if (isset($_POST['submit'])) {
            if($request->hasFile('pengumuman_sampul')){
                $destination_path = 'public/pengumuman_terbaru';
                $pengumuman_sampul = $request->file('pengumuman_sampul');
                $pengumuman_sampul_name = $pengumuman_sampul->getClientOriginalName();
                $path = $request->file('pengumuman_sampul')->storeAs($destination_path, $pengumuman_sampul_name);
            }
            $this->validate($request, [
                'pengumuman_judul'      => 'required',
                'pengumuman_konten'     => 'required',
                'pengumuman_status'     =>  'required',
                'pengumuman_kategori'   =>  'required'
            ]);
            $insert = [
                'pengumuman_judul'      => $request->pengumuman_judul,
                'pengumuman_slug'       => SlugService::createSlug(Announcements::class, 'pengumuman_slug', $request->pengumuman_judul),
                'pengumuman_konten'     => $request->pengumuman_konten,
                'pengumuman_sampul'     => $pengumuman_sampul_name,
                'pengumuman_author'     =>  Auth::user()->user_id,
                'pengumuman_status'     =>  $request->pengumuman_status,
                'pengumuman_kategori'   =>  $request->pengumuman_kategori
            ];
            Announcements::insertGetId($insert);
            return redirect('pengumuman')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.pengumuman.create_pengumuman', $data);
        }
    }

    public function update(Request $request)
    {
        $data['title'] = 'Update Data Pengumuman';
        if (isset($_POST['submit'])) {
            if (!isset($request->pengumuman_sampul)) {
                $pengumuman = Announcements::find($request->pengumuman_id);
                $pengumuman->pengumuman_judul      = $request->pengumuman_judul;
                $pengumuman->pengumuman_slug       = SlugService::createSlug(Announcements::class, 'pengumuman_slug', $request->pengumuman_judul);
                $pengumuman->pengumuman_konten     = $request->pengumuman_konten;
                $pengumuman->pengumuman_author     =  Auth::user()->user_id;
                $pengumuman->pengumuman_status     =  $request->pengumuman_status;
                $pengumuman->pengumuman_kategori   =  $request->pengumuman_kategori;
                $pengumuman->save();
                return redirect('pengumuman')->with('success', 'Data berhasil diubah!');
            } else {
                Storage::delete([$request->sampul]);
                if($request->hasFile('pengumuman_sampul')){
                    $destination_path = 'public/pengumuman_terbaru';
                    $pengumuman_sampul = $request->file('pengumuman_sampul');
                    $pengumuman_sampul_name = $pengumuman_sampul->getClientOriginalName();
                    $path = $request->file('pengumuman_sampul')->storeAs($destination_path, $pengumuman_sampul_name);
                }
                $pengumuman = Announcements::find($request->pengumuman_id);
                $pengumuman->pengumuman_judul      = $request->pengumuman_judul;
                $pengumuman->pengumuman_slug       = SlugService::createSlug(Announcements::class, 'pengumuman_slug', $request->pengumuman_judul);
                $pengumuman->pengumuman_konten     = $request->pengumuman_konten;
                $pengumuman->pengumuman_author     =  Auth::user()->user_id;
                $pengumuman->pengumuman_sampul     =  $pengumuman_sampul_name;
                $pengumuman->pengumuman_status     =  $request->pengumuman_status;
                $pengumuman->pengumuman_kategori   =  $request->pengumuman_kategori;
                $pengumuman->save();
                return redirect('pengumuman')->with('success', 'Data berhasil diubah!');
            }
        } else {
            $data['data_pengumuman'] = Announcements::where('pengumuman_id', $request->pengumuman_id)->get();
            $data['data_kategori'] = Announcements_categories::all();
            return view('backend.pengumuman.update_pengumuman', $data);
        }
    }

    public function delete(Request $request)
    {
        $delete = DB::table($this->table)->where('pengumuman_id', $request->pengumuman_id)->delete();
        if ($delete) {
            Storage::delete([$request->pengumuman_sampul]);
            return redirect('pengumuman')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('pengumuman')->with('failed', 'Data gagal diahapus!');
        }
    }
}
