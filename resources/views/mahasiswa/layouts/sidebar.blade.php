<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="profile-sidebar">
        <div class="profile-userpic">
            <img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
        </div>
        <div class="profile-usertitle">
            <div class="profile-usertitle-name"> 
                {{ Auth::user()->name }}
            </div>
            <div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="@if (Request::segment(1)=='home') active @endif">
            <a href="{{ url('/home') }}"><em class="fa fa-home">&nbsp;</em> Home </a>
        </li>
        <li class="@if (Request::segment(1)=='buatsurat') active @endif">
            <a href="{{ url('/buatsurat') }}"><em class="fa fa-file-text">&nbsp;</em> Buat Surat</a>
        </li>
        <li class="@if (Request::segment(1)=='statussurat') active @endif">
            <a href="{{ route('status.surat') }}"><em class="fa fa-file-text">&nbsp;</em> Status Surat</a>
        </li>
        <li>
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
               {{ __('Logout') }}><em class="fa fa-power-off">&nbsp;</em>Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </li>
    </ul>
    
</div><!--/.sidebar-->
    

    