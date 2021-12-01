@extends('backend.layouts.app')
@section('title', 'Data Admin')
@section('content')
<div class="main_content_iner ">
    @foreach ($data_user as $item)
    <div class="container-fluid p-0 sm_padding_15px">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card_box box_shadow position-relative mb_30     ">
                    <div class="white_box_tittle     ">
                        <div class="main-title2 ">
                            <div class="row text-center">
                                <h4 class="mb-2 nowrap">My Profile</h4>
                            </div>
                        </div>
                    </div>
                    <div class="box_body">
                        <p class="f-w-400 ">
                            <div class="row text-center">
                                <div class="col-md-6">
                                    <img src="{{asset('storage/user_foto/'.Auth::user()->user_foto)}}" style="width: 100px">
                                </div>
                                <div class="col-md-6">
                                    <p>Nama : {{$item->user_nama}}</p>
                                    <p>NIP : {{$item->user_nip}}</p>
                                    <p>Kontak : {{$item->user_kontak}}</p>
                                    <p>Level : {{$item->user_level}}</p>
                                </div>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
</section>
<!-- main content part end -->
@endsection