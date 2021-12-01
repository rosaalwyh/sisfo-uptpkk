@extends('backend.layouts.app')
@section('title', 'Form Input Admin')
@section('content')
<div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0"><?= $title ?></h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <h6 class="card-subtitle mb-2">Mohon untuk memasukan data yang valid!</h6>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        @foreach ($errors->all() as $err)
                                            {{$err}} 
                                            <?= '<br>' ?>                   
                                        @endforeach
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                @endif
                            <form method="post" action="{{url('admin/save')}}" enctype="multipart/form-data">
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <label for="inputNip">NIP</label>
                                    <input type="text" class="form-control" name="user_nip" id="inputNip" aria-describedby="nipHelp" placeholder="Masukan NIP anda" required>
                                    <small id="nipHelp" class="form-text text-muted">Masukan NIP anda dengan benar agar data bisa divalidasi!</small>
                                </div>
                                <div class="form-group">
                                    <label for="inputNama">Nama</label>
                                    <input type="text" class="form-control" id="inputNama" name="user_nama" placeholder="Masukan Nama Pegawai" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputKontak">Kontak</label>
                                    <input type="text" class="form-control" id="inputKontak" name="user_kontak" placeholder="Masukan Kontak Pegawai" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPassword">Password</label>
                                    <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputPasswordConfirm">Password</label>
                                    <input type="password" class="form-control" id="inputPasswordConfirm" name="password_confirmation" placeholder="Password" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputUserFoto">Foto User</label>
                                    <input type="file" class="form-control-file" name="user_foto" id="inputUserFoto" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputLevel">Level</label>
                                    <select class="form-control" id="inputLevel" name="user_level">
                                        <option disabled selected>Masukan Level User</option>
                                        <option value="superadmin">Super Admin</option>
                                        <option value="admin">Admin</option>
                                    </select>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->
@endsection