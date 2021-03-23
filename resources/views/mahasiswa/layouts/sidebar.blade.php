<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <div class="divider"></div>
    <ul class="nav menu">
        <li class="@if (Request::segment(1)=='home') active @endif"><a href="{{ url('/home') }}"><em class="fa fa-home">&nbsp;</em> Home </a></li>
        <li class="@if (Request::segment(1)=='buatsurat') active @endif"><a href="{{ url('/buatsurat') }}"><em class="fa fa-file-text">&nbsp;</em> Buat Surat</a></li>
    </ul>
    
</div><!--/.sidebar-->
    

    