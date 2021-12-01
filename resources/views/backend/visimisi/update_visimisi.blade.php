@extends('backend.layouts.app')
@section('title', 'Update Visi dan Misi')
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
                                @foreach ($data_visimisi as $i)
                                    <form method="post" action="{{route('visimisi.update')}}" enctype="multipart/form-data">
                                        @csrf <!-- {{ csrf_field() }} -->
                                        <div class="form-group">
                                            <label>Visi</label>
                                            <input type="hidden" value="{{$i->visi_id}}" name="visi_id" id="">
                                            <input type="hidden" value="{{$i->visi_foto}}" name="sampul">
                                            <textarea name="visi_konten" id="kt-ckeditor-1">{{$i->visi_konten}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Misi</label>
                                            <input type="hidden" value="{{$i->visi_id}}" name="misi_id" id="">
                                            <input type="hidden" value="{{$i->visi_foto}}" name="sampul">
                                            <textarea name="misi_konten" id="kt-ckeditor-2">{{$i->misi_konten}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tujuan</label>
                                            <input type="hidden" value="{{$i->visi_id}}" name="tujuan_id" id="">
                                            <input type="hidden" value="{{$i->visi_foto}}" name="sampul">
                                            <textarea name="tujuan_konten" id="kt-ckeditor-3">{{$i->tujuan_konten}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputVisiFoto">Foto Visi Misi</label>
                                            <input type="file" class="form-control-file" name="visi_foto" id="inputVisiFoto">
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