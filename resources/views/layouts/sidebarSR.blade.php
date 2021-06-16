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
        <li class="active"><a href="{{ route('sekretariat.dashboard') }}"><em class="fa fa-home">&nbsp;</em> Dashboard </a></li>
        <li class="parent "><a data-toggle="collapse" href="#">
            <em class="fa fa-file-text">&nbsp;</em> Tata Naskah <span data-toggle="collapse" href="#sub-item-1" class="icon pull-right"><em class="fa fa-plus"></em></span>
            </a>
            <ul class="children collapse" id="sub-item-1">
                <li><a class="" href="#">
                    <span class="fa fa-arrow-right">&nbsp;</span> Pengajuan
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-arrow-right">&nbsp;</span> Ditandatangani
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-arrow-right">&nbsp;</span> Paraf
                </a></li>
                <li><a class="" href="#">
                    <span class="fa fa-arrow-right">&nbsp;</span> Ditolak
                </a></li>
            </ul>
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