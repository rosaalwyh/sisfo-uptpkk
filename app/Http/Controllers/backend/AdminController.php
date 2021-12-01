<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    //
    protected $table = 'users';
    public function index()
    {
        $data['title'] = 'Data Admin';
        $data['data_admin'] = User::all();
        return view('backend.admin.data_admin', $data);
    }

    public function create(Request $request)
    {
        $data['title'] = 'Form Admin';
        if (isset($_POST['submit'])) {
            $this->validate($request, [
                'user_nama'             => 'required',
                'user_nip'              => 'required|unique:users',
                'user_kontak'           => 'required|unique:users',
                'password'              => 'required|min:6',
                'password_confirmation' => 'required|same:password',
            ]);
            if (isset($request->user_foto)) {
                if($request->hasFile('user_foto')){
                    $destination_path = 'public/user_foto';
                    $user_foto = $request->file('user_foto');
                    $user_foto_name = $user_foto->getClientOriginalName();
                    $path = $request->file('user_foto')->storeAs($destination_path, $user_foto_name);
                }
                User::create([
                    'user_nama'     => $request->user_nama,
                    'user_nip'     => $request->user_nip,
                    'user_kontak'     => $request->user_kontak,
                    'password'     => bcrypt($request->password),
                    'user_foto'     => $user_foto_name,
                ]);
            } else {
                User::create([
                    'user_nama'     => $request->user_nama,
                    'user_nip'     => $request->user_nip,
                    'user_kontak'     => $request->user_kontak,
                    'password'     => bcrypt($request->password),
                    'user_foto'     => 'user_foto/avatar.png',

                ]);
            }
            return redirect('admin')->with('success', 'Data berhasil ditambah');
        } else {
            return view('backend.admin.create_admin', $data);
        }
    }

    public function update(Request $request)
    {
        $data['title'] = 'Update data admin';
        if (isset($_POST['submit'])) {
            $user = User::find($request->user_id);
            $user->user_nip = $request->user_nip;
            $user->user_nama = $request->user_nama;
            $user->user_kontak = $request->user_kontak;
            $user->user_level = $request->user_level;
            $user->save();
            return redirect('admin')->with('success', 'Data berhasil diubah!');
        } else {
            $data['data_admin'] = User::where('user_id', $request->user_id)->get();
            return view('backend.admin.update_admin', $data);
        }
    }
    public function delete(Request $req)
    {
        $id = $req->user_id;
        $delete = DB::table($this->table)->where('user_id', $id)->delete();
        if ($delete) {
            if ($req->user_foto != 'user_foto/avatar.png') {
                Storage::delete($req->user_foto);
            }
            return redirect('admin')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect('admin')->with('failed', 'Data berhasil dihapus');
        }
    }
}
