<?php

use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\BeritaController;
use App\Http\Controllers\backend\BeritaKategoriController;
use App\Http\Controllers\backend\HomeController;
use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\PengumumanController;
use App\Http\Controllers\backend\PengumumanKategoriController;
use App\Http\Controllers\backend\SeminarKarirController;
use App\Http\Controllers\backend\KonselingKarirController;
use App\Http\Controllers\backend\SeminarKewirausahaanController;
use App\Http\Controllers\backend\KonselingKewirausahaanController;
use App\Http\Controllers\backend\InformasiKewirausahaanController;
use App\Http\Controllers\backend\StrukturOrganisasiController;
use App\Http\Controllers\backend\ProfileController;
use App\Http\Controllers\backend\SejarahController;
use App\Http\Controllers\backend\VisiMisiController;
use App\Http\Controllers\PengumumanControllers;
use App\Http\Controllers\BeritaControllers;
use App\Http\Controllers\HomeControllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeControllers::class, 'index'])->name('home');

//Route frontend berita
Route::get('/detail-berita/{id}/', [HomeControllers::class, 'detailBerita'])->name('detail-berita');

//Route frontend pengumuman
Route::get('/detail-pengumuman/{id}/', [HomeControllers::class, 'detailPengumuman'])->name('detail-pengumuman');

//Route frontend seminar karir
Route::get('/detail-seminar-karir/{id}/', [HomeControllers::class, 'detailSeminarKarir'])->name('detail-seminar-karir');

//Route frontend konseling karir
Route::get('/konseling', [HomeControllers::class, 'konselingKewirausahaan'])->name('konseling');
Route::get('/detail-konseling-karir/{id}/', [HomeControllers::class, 'detailKonselingKarir'])->name('detail-konseling-karir');

//Route frontend informasi kewirausahaan
Route::get('/detail-informasi-kewirausahaan/{id}/', [HomeControllers::class, 'detailinformasiKewirausahaan'])->name('detail-informasi-kewirausahaan');

//Route frontend seminar kewirausahaan
Route::get('/seminar', [HomeControllers::class, 'seminarKewirausahaan'])->name('seminar');
Route::get('/detail-seminar-kewirausahaan/{id}/', [HomeControllers::class, 'detailSeminarKewirausahaan'])->name('detail-seminar-kewirausahaan');

//Route konseling kewirausahaan
Route::view('/detail-konseling-kewirausahaan/{id}/', 'frontend.page.kewirausahaan.detail-konseling-kewirausahaan')->name('detail-konseling-kewirausahaan');

Route::get('login', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('login', [LoginController::class, 'login'])->name('auth.login');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cek_login:superadmin']], function () {
        Route::get('/dash', [HomeController::class, 'index'])->name('dash');
        // Routing Admin
        Route::get('/profile/{id}', [ProfileController::class, 'index'])->name('profile');
        Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        Route::get('/admin-create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/admin-update', [AdminController::class, 'update'])->name('admin.update');
        Route::post('/admin-delete', [AdminController::class, 'delete'])->name('admin.delete');
        Route::post('/admin/save', [AdminController::class, 'create'])->name('name.save');

        // Routing Kategori Pengumuman
        Route::get('/PNKategori', [PengumumanKategoriController::class, 'index'])->name('PNKategori');
        Route::get('/PNKategori-create', [PengumumanKategoriController::class, 'create'])->name('PNKategori.create');
        Route::post('/PNKategori/save', [PengumumanKategoriController::class, 'create'])->name('PNKategori.save');
        Route::post('/PNKategori-update', [PengumumanKategoriController::class, 'update'])->name('PNKategori.update');
        Route::post('/PNKategori-delete', [PengumumanKategoriController::class, 'delete'])->name('PNKategori.delete');

        // Routing Pengumuman
        Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
        Route::get('/pengumuman-create', [PengumumanController::class, 'create'])->name('pengumuman.create');
        Route::post('/pengumuman-update', [PengumumanController::class, 'update'])->name('pengumuman.update');
        Route::post('/pengumuman/save', [PengumumanController::class, 'create'])->name('pengumuman.save');
        Route::post('/pengumuman/delete', [PengumumanController::class, 'delete'])->name('pengumuman.delete');

        // Routing Berita
        Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
        Route::get('/berita-create', [BeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita-save', [BeritaController::class, 'create'])->name('berita.save');
        Route::post('/berita-update', [BeritaController::class, 'update'])->name('berita.update');
        Route::post('/berita-delete', [BeritaController::class, 'delete'])->name('berita.delete');

        // Routing Kategori Berita
        Route::get('/BRKategori', [BeritaKategoriController::class, 'index'])->name('BRKategori');
        Route::get('/BRKategori-create', [BeritaKategoriController::class, 'create'])->name('BRKategori.create');
        Route::post('/BRKategori-save', [BeritaKategoriController::class, 'create'])->name('BRKategori.save');
        Route::post('/BRKategori-update', [BeritaKategoriController::class, 'update'])->name('BRKategori.update');
        Route::post('/BRKategori-delete', [BeritaKategoriController::class, 'delete'])->name('BRKategori.delete');

        //Routing Seminar Karir
        Route::get('/seminar-karir', [SeminarKarirController::class, 'index'])->name('seminar-karir');
        Route::get('/seminar-karir-create', [SeminarKarirController::class, 'create'])->name('seminar-karir.create');
        Route::post('/seminar-karir-save', [SeminarKarirController::class, 'create'])->name('seminar-karir.save');
        Route::post('/seminar-karir-update', [SeminarKarirController::class, 'update'])->name('seminar-karir.update');
        Route::post('/seminar-karir-delete', [SeminarKarirController::class, 'delete'])->name('seminar-karir.delete');

        //Routing Konseling Karir
        Route::get('/konseling-karir', [KonselingKarirController::class, 'index'])->name('konseling-karir');
        Route::get('/konseling-karir-create', [KonselingKarirController::class, 'create'])->name('konseling-karir.create');
        Route::post('/konseling-karir-save', [KonselingKarirController::class, 'create'])->name('konseling-karir.save');
        Route::post('/konseling-karir-update', [KonselingKarirController::class, 'update'])->name('konseling-karir.update');
        Route::post('/konseling-karir-delete', [KonselingKarirController::class, 'delete'])->name('konseling-karir.delete');

        //Routing Seminar Kewirausahaan
        Route::get('/seminar-kewirausahaan', [SeminarKewirausahaanController::class, 'index'])->name('seminar-kewirausahaan');
        Route::get('/seminar-kewirausahaan-create', [SeminarKewirausahaanController::class, 'create'])->name('seminar-kewirausahaan.create');
        Route::post('/seminar-kewirausahaan-save', [SeminarKewirausahaanController::class, 'create'])->name('seminar-kewirausahaan.save');
        Route::post('/seminar-kewirausahaan-update', [SeminarKewirausahaanController::class, 'update'])->name('seminar-kewirausahaan.update');
        Route::post('/seminar-kewirausahaan-delete', [SeminarKewirausahaanController::class, 'delete'])->name('seminar-kewirausahaan.delete');

        //Routing Konseling Kewirausahaan
        Route::get('/konseling-kewirausahaan', [KonselingKewirausahaanController::class, 'index'])->name('konseling-kewirausahaan');
        Route::get('/konseling-kewirausahaan-create', [KonselingKewirausahaanController::class, 'create'])->name('konseling-kewirausahaan.create');
        Route::post('/konseling-kewirausahaan-save', [KonselingKewirausahaanController::class, 'create'])->name('konseling-kewirausahaan.save');
        Route::post('/konseling-kewirausahaan-update', [KonselingKewirausahaanController::class, 'update'])->name('konseling-kewirausahaan.update');
        Route::post('/konseling-kewirausahaan-delete', [KonselingKewirausahaanController::class, 'delete'])->name('konseling-kewirausahaan.delete');

        //Routing Informasi Kewirausahaan
        Route::get('/informasi-kewirausahaan', [InformasiKewirausahaanController::class, 'index'])->name('informasi-kewirausahaan');
        Route::get('/informasi-kewirausahaan-create', [InformasiKewirausahaanController::class, 'create'])->name('informasi-kewirausahaan.create');
        Route::post('/informasi-kewirausahaan-save', [InformasiKewirausahaanController::class, 'create'])->name('informasi-kewirausahaan.save');
        Route::post('/informasi-kewirausahaan-update', [InformasiKewirausahaanController::class, 'update'])->name('informasi-kewirausahaan.update');
        Route::post('/informasi-kewirausahaan-delete', [InformasiKewirausahaanController::class, 'delete'])->name('informasi-kewirausahaan.delete');

        //Routing Visi Misi
        Route::get('/visimisi', [VisiMisiController::class, 'index'])->name('visimisi');
        Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::get('/visimisi/create', [VisiMisiController::class, 'create'])->name('visimisi.create');
        Route::post('/visimisi-save', [VisiMisiController::class, 'create'])->name('visimisi.save');
        Route::post('/visimisi-update', [VisiMisiController::class, 'update'])->name('visimisi.update');
        Route::post('/visimisi/delete', [VisiMisiController::class, 'delete'])->name('visimisi.delete');

        //Routing Sejarah
        Route::get('sejarah', [SejarahController::class, 'index'])->name('sejarah');
        Route::get('sejarah-create', [SejarahController::class, 'create'])->name('sejarah.create');
        Route::post('sejarah/save', [SejarahController::class, 'create'])->name('sejarah.save');
        Route::post('sejarah/update', [SejarahController::class, 'update'])->name('sejarah.update');
        Route::post('sejarah/delete', [SejarahController::class, 'delete'])->name('sejarah.delete');

        //Routing Stuktur Organisasi
        Route::get('struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('struktur-organisasi');
        Route::get('struktur-organisasi-create', [StrukturOrganisasiController::class, 'create'])->name('struktur-organisasi.create');
        Route::post('struktur-organisasi/save', [StrukturOrganisasiController::class, 'create'])->name('struktur-organisasi.save');
        Route::post('struktur-organisasi/update', [StrukturOrganisasiController::class, 'update'])->name('struktur-organisasi.update');
        Route::post('struktur-organisasi/delete', [StrukturOrganisasiController::class, 'delete'])->name('struktur-organisasi.delete');
    });
    Route::group(['middleware' => ['cek_login:admin']], function () {
        // Route::get('/admin', [HomeController::class, 'index']);
    });
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
    //
});
