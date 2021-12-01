<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Visi;
use App\Models\Organizational_structures;
use App\Models\Histories;
use App\Models\InformasiKewirausahaan;
use App\Models\SeminarKewirausahaan;
use App\Models\SeminarKarir;
use App\Models\KonselingKarir;
use App\Models\KonselingKewirausahaan;
use App\Models\News;

class HomeControllers extends Controller
{
    // protected $table = 'announcements';
    
    public function index(){
        $data['data_berita'] = DB::table('news')
        ->join('news_categories', 'news.berita_kategori', '=', 'news_categories.kategori_id')
        ->simplePaginate(3);
        $data['data_pengumuman'] = DB::table('announcements')
            ->join('announcement_categories', 'announcements.pengumuman_kategori', '=', 'announcement_categories.kategori_id')
            ->simplePaginate(3);
        $data['data_seminar'] = DB::table('seminar_karirs')
        ->simplePaginate(3);
        $data['data_konseling'] = DB::table('konseling_karirs')
        ->simplePaginate(3);
        $data['data_visimisi'] = Visi::all();
        $data['data_struktur'] = Organizational_structures::all();
        $data['data_sejarah'] = Histories::all();
        $data['data_informasi'] = DB::table('informasi_kewirausahaans')
        ->simplePaginate(3);
        $data['data_konselingkew'] = DB::table('konseling_kewirausahaans')
        ->simplePaginate(3);
        $data['data_seminarkew'] = DB::table('seminar_kewirausahaans')
        ->simplePaginate(3);
            // dd($data['data_berita']);
        return view('frontend.app', $data);
    }

    public function informasiKewirausahaan(){
        $data['data_informasi'] = InformasiKewirausahaan::all();
        return view('frontend.page.kewirausahaan.informasi-kewirausahaan', $data);
    }

    public function seminarKewirausahaan(){
        $data['data_seminar'] = SeminarKewirausahaan::all();
        // dd($data);
        return view('frontend.page.kewirausahaan.seminar-kewirausahaan', $data);
    }

    public function konselingKewirausahaan(){
        $data['data_konseling'] = KonselingKewirausahaan::all();
        // dd($data);
        return view('frontend.page.kewirausahaan.konseling-kewirausahaan', $data);
    }

    public function detailBerita($id){
        $data = DB::table('news')->where('berita_id', $id)->get();
        // dd($data);
        return view('frontend.page.berita.detail_berita',compact('data'));
    }

    public function detailPengumuman($id){
        $data = DB::table('announcements')->where('pengumuman_id', $id)->get();
        // dd($data);
        return view('frontend.page.pengumuman.detail_pengumuman',compact('data'));
    }

    public function detailSeminarKarir($id){
        $data = DB::table('seminar_karirs')->where('id', $id)->get();
        // dd($data);
        return view('frontend.page.karir.detail-seminar',compact('data'));
    }

    public function detailKonselingKarir($id){
        $data = DB::table('konseling_karirs')->where('id', $id)->get();
        // dd($data);
        return view('frontend.page.karir.detail-konseling-karir',compact('data'));
    }

    public function detailinformasiKewirausahaan($id){
        $data = DB::table('informasi_kewirausahaans')->where('id', $id)->get();
        // dd($data);
        return view('frontend.page.kewirausahaan.detail-informasi-kewirausahaan',compact('data'));
    }

    public function detailSeminarKewirausahaan($id){
        $data = DB::table('seminar_kewirausahaans')->where('id', $id)->get();
        // dd($data);
        return view('frontend.page.kewirausahaan.detail-seminar-kewirausahaan',compact('data'));
    }

    public function detailKonselingKewirausahaan($id){
        $data = DB::table('konseling_kewirausahaans')->where('id', $id)->get();
        // dd($data);
        return view('frontend.page.kewirausahaan.detail-konseling-kewirausahaan',compact('data'));
    }

    // public function visiMisi(){
    //     $data['title'] = 'Visi dan Misi';
    //     $data['data_visimisi'] = Visi::all();
    //     $data['data_struktur'] = Organizational_structures::all();
    //     $data['data_sejarah'] = Histories::all();
    //     return view('frontend.page.about.index', $data);
    // }
}
