<section class="main_content dashboard_part large_header_bg">
    <!-- menu  -->
<div class="container-fluid no-gutters">
    <div class="row">
        <div class="col-lg-12 p-0 ">
            <div class="header_iner d-flex justify-content-between align-items-center">
                <div class="sidebar_icon d-lg-none">
                    <i class="ti-menu"></i>
                </div>
                <div class="line_icon open_miniSide d-none d-lg-block">
                    <img src="{{asset('storage/user_foto'.Auth::user()->user_foto)}}" alt="">
                </div>
                <div class="header_right d-flex justify-content-between align-items-center">
                    <div class="profile_info">
                        <img src="{{asset('storage/user_foto/'.Auth::user()->user_foto)}}" alt="#">
                        <div class="profile_info_iner">
                            <div class="profile_author_name">
                                <p>{{Auth::user()->user_nama}}</p>
                                <h5>{{Auth::user()->user_nip}}</h5>
                            </div>
                            <div class="profile_info_details">
                                <a href="{{url('profile/'.Auth::user()->user_id)}}">My Profile </a>
                                <td>
                                    <form action="{{route('profile.update')}}" method="post" class="d-inline">
                                        @csrf
                                        <input type="hidden" name="user_id" value="{{Auth::user()->user_id}}">
                                        <button type="submit" class="btn">Settings</button>
                                    </form>
                                </td>
                                <a href="{{route('logout')}}">Log Out</a>
                                {{--  <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Out</a><form action="#" method="POST" class="d-none" id="logout-form">@csrf</form>  --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>