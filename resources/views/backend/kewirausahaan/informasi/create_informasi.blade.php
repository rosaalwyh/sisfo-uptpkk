@extends('backend.layouts.app')
@section('title', 'Form Informasi Kewirausahaan')
@section('content')
<div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <h3 class="m-0">Form Informasi Kewirausahaan</h3>
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
                            <form method="post" action="{{route('informasi-kewirausahaan.save')}}" enctype="multipart/form-data">
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <label>Judul Informasi Kewirausahaan</label>
                                    <input type="text" class="form-control" name="informasi_judul" id="informasi_judul" placeholder="Masukan Judul Informasi" required>
                                </div>
                                <div class="form-group">
                                    <label>Penulis Informasi Kewirausahaan</label>
                                    <input type="text" class="form-control" name="informasi_penulis" id="informasi_penulis" placeholder="Masukan Penulis Informasi" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Informasi Kewirausahaan</label>
                                    <input type="date" class="form-control" name="informasi_tanggal" id="informasi_tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label>Konten Informasi Kewirausahaan</label>
                                    <textarea name="informasi_konten" id="kt-ckeditor-1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="informasi_foto">Foto Informasi Kewirausahaan</label>
                                    <input type="file" class="form-control-file" name="informasi_foto" id="informasi_foto">
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