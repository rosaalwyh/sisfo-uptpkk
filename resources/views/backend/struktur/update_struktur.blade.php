@extends('backend.layouts.app')
@section('title', 'Update Struktur Organisasi')
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
                                @foreach ($data_struktur as $i)
                                    <form method="post" action="{{route('struktur-organisasi.update')}}" enctype="multipart/form-data">
                                        @csrf <!-- {{ csrf_field() }} -->
                                        <div class="form-group">
                                            <input type="hidden" value="{{$i->struktur_id}}" name="struktur_id">
                                            <input type="hidden" value="{{$i->struktur_foto}}" name="sampul">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStrukturOrganisasi">Foto Struktur Organisasi</label>
                                            <input type="file" class="form-control-file" name="struktur_foto" id="inputStrukturOrganisasi" val>
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