@extends('backend.layouts.app')
@section('title', 'Form Seminar Karir')
@section('content')
<div class="main_content_iner">
        <div class="container-fluid p-0 sm_padding_15px">
            <div class="row">
                <div class="col-lg-8">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <h3 class="m-0">Form Seminar Karir</h3>
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
                            <form method="post" action="{{route('seminar-karir.save')}}" enctype="multipart/form-data">
                                @csrf <!-- {{ csrf_field() }} -->
                                <div class="form-group">
                                    <label>Judul Seminar Karir</label>
                                    <input type="text" class="form-control" name="seminar_judul" id="seminar_judul" placeholder="Masukan Judul Seminar" required>
                                </div>
                                <div class="form-group">
                                    <label>Penulis Seminar Karir</label>
                                    <input type="text" class="form-control" name="seminar_penulis" id="seminar_penulis" placeholder="Masukan Penulis Seminar" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal Seminar Karir</label>
                                    <input type="date" class="form-control" name="seminar_tanggal" id="seminar_tanggal" required>
                                </div>
                                <div class="form-group">
                                    <label>Konten Seminar Karir</label>
                                    <textarea name="seminar_konten" id="kt-ckeditor-1"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="seminar_foto">Foto Seminar Karir</label>
                                    <input type="file" class="form-control-file" name="seminar_foto" id="seminar_foto" required>
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