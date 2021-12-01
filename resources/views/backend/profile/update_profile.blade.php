@extends('backend.layouts.app')
@section('title', 'Update Data Profile')
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
                                @foreach ($data_user as $i)
                                    <form method="post" action="{{route('profile.update')}}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" value="{{$i->user_id}}" name="id">
                                        <input type="hidden" value="{{$i->user_foto}}" name="user_foto">
                                        <div class="form-group">
                                            <label for="inputNip">NIP</label>
                                            <input type="hidden" class="form-control" name="user_id" id="inputNip" aria-describedby="nipHelp" placeholder="Masukan NIP anda" value="<?= $i->user_id ?>" required>
                                            <input type="text" class="form-control" name="user_nip" id="inputNip" aria-describedby="nipHelp" placeholder="Masukan NIP anda" value="<?= $i->user_nip ?>" required>
                                            <small id="nipHelp" class="form-text text-muted">Masukan NIP anda dengan benar agar data bisa divalidasi!</small>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputNama">Nama</label>
                                            <input type="text" class="form-control" id="inputNama" name="user_nama" placeholder="Masukan Nama Pegawai" value="<?= $i->user_nama ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputKontak">Kontak</label>
                                            <input type="text" class="form-control" id="inputKontak" name="user_kontak" placeholder="Masukan Kontak Pegawai" value="<?= $i->user_kontak ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="user_foto">Foto User</label>
                                            <input type="file" class="form-control-file" name="user_foto" id="user_foto">
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- main content part end -->
@endsection