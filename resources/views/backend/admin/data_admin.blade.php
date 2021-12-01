@extends('backend.layouts.app')
@section('title', 'Data Admin')
@section('content')
    <div class="main_content_iner ">
        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">
                                    <h4><?= $title; ?></h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text" id="myInput" placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="add_button ml-10">
                                            <a href="{{route('admin.create')}}" class="btn_1">Tambah Data</a>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="QA_table mb_30">
                                    @if($message = Session::get('error'))
                                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                            <strong>Gagal!</strong> {{$message}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif
                                    @if($message = Session::get('success'))
                                        <div class="alert alert-success alert-dismissible fade show col-lg-4" role="alert">
                                            <strong>Sukses!</strong> {{$message}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active3 " id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">NIP</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Kontak</th>
                                                <th scope="col">Level</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($data_admin as $i): ?>
                                            <tr>
                                                <td><?= $i->user_nip ?></td>
                                                <td><?= $i->user_nama ?></td>
                                                <td><?= $i->user_kontak ?></td>
                                                <td><?= $i->user_level ?></td>
                                                <td>
                                                    <form action="{{route('admin.delete')}}" method="post" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{$i->user_id}}">
                                                        <input type="hidden" name="user_foto" value="{{$i->user_foto}}" id="">
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    <form action="{{route('admin.update')}}" method="post" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{$i->user_id}}">
                                                        <button type="submit" class="btn btn-warning"><i class="fa fa-pen"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    $(document).ready( function () {
    oTable = $('#myTable').DataTable({
        bLengthChange: false,
        "bDestroy": false,
        language: {
            search: "<i class='ti-search'></i>",
            searchPlaceholder: 'Quick Search',
            paginate: {
                next: "<i class='ti-arrow-right'></i>",
                previous: "<i class='ti-arrow-left'></i>"
            }
        },
        columnDefs: [{
            visible: false
        }],
        responsive: true,
        searching: false,
        info: true,
        paging: true
    });
} );
</script>
<!-- main content part end -->
@endsection