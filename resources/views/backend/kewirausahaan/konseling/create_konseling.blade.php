@extends('backend.layouts.app')
@section('title', 'Form Konseling Kewirausahaan')
@section('content')
<div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <h3 class="m-0">Form Konseling Kewirausahaan</h3>
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
                            <form method="post" action="{{route('konseling-kewirausahaan.save')}}" enctype="multipart/form-data">
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <label>Judul Konseling Kewirausahaan</label>
                                    <input type="text" class="form-control" name="konseling_judul" id="konseling_judul" placeholder="Masukan Judul Konseling" required>
                                </div>
                                <div class="form-group">
                                    <label>Penulis Konseling Kewirausahaan</label>
                                    <input type="text" class="form-control" name="konseling_penulis" id="konseling_penulis" placeholder="Masukan Penulis Konseling" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Konseling Kewirausahaan</label>
                                    <input type="date" class="form-control" name="konseling_tanggal" id="konseling_tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label>Konten Konseling Kewirausahaan</label>
                                    <textarea name="konseling_konten" id="kt-ckeditor-1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="konseling_foto">Foto Konseling Kewirausahaan</label>
                                    <input type="file" class="form-control-file" name="konseling_foto" id="konseling_foto" required>
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