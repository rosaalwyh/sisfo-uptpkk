@extends('backend.layouts.app')
@section('title', 'Update berita')
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
                                @foreach ($data_berita as $i)
                                    <form method="post" action="{{route('berita.update')}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label for="inputJudul">Judul</label>
                                            <input type="hidden" value="<?= $i->berita_id ?>" name="berita_id">
                                            <input type="text" class="form-control" name="berita_judul" id="inputJudul" placeholder="Masukan Judul berita" value="<?= $i->berita_judul ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label>berita</label>
                                            <textarea name="berita_konten" id="kt-ckeditor-1"><?= $i->berita_konten ?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputSampul">Sampul</label>
                                            <input type="hidden" value="<?= $i->berita_sampul ?>" name="sampul">
                                            <input type="file" class="form-control-file" name="berita_sampul" id="inputSampul">
                                        </div>
                                        <div class="form-group">
                                            <label for="inputKategori">Kategori</label>
                                            <select class="form-control" name="berita_kategori" id="inputKategori" required>
                                                <?php foreach($data_kategori as $j): ?>
                                                <option <?php if($i->berita_kategori == $j->kategori_id){ echo 'selected'; } ?> value="<?= $j->kategori_id ?>"><?= $j->kategori_nama ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputStatus">Status</label>
                                            <select class="form-control" name="berita_status" id="inputStatus" required>
                                                <?php 
                                                $status = ['Tidak Dipublis', 'Dipublis'];
                                                for($k=0; $k<=1; $k++): ?>
                                                <option <?php if($i->berita_status == $k){ echo 'selected'; } ?> value="<?= $k ?>"><?= $status[$k] ?></option>
                                                <?php endfor; ?>
                                            </select>
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