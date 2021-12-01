@extends('backend.layouts.app')
@section('title', 'Data Seminar Karir')
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
                                            <a href="{{route('seminar-karir.create')}}" class="btn_1">Tambah Data</a>
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
                                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>Sukses!</strong> {{$message}}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                    @endif
                                    <!-- table-responsive -->
                                    <table class="table lms_table_active3" id="myTable">
                                        <thead>
                                            <tr>
                                                <th scope="col">Seminar Judul</th>
                                                <th scope="col">Seminar Penulis</th>
                                                <th scope="col">Seminar Konten</th>
                                                <th scope="col">Seminar Tanggal</th>
                                                <th scope="col">Seminar Foto</th>
                                                <th scope="col">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            foreach($data_seminar as $i): ?>
                                            <tr>
                                                <td><?= $i->seminar_judul ?></td>
                                                <td><?= $i->seminar_penulis ?></td>
                                                <td><?= substr_replace($i->seminar_konten, "...", 40) ?></td>
                                                <td><?= $i->seminar_tanggal ?></td>
                                                <td><img src="{{asset('storage/seminar_karir/'.$i->seminar_foto)}}" style="width: 100px"></td>
                                                <td>
                                                    <form action="{{route('seminar-karir.delete')}}" method="post" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" value="{{$i->seminar_foto}}" name="seminar_foto" id="">
                                                        <input type="hidden" name="id" value="{{$i->id}}">
                                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                    <form action="{{route('seminar-karir.update')}}" method="post" class="d-inline">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{$i->id}}">
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