<header class="header-area header-sticky static">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo-itk" >
                        <img src="{{ asset('assets/images/logo-itk.png') }}"  width="86px" alt="" style="margin-top: 8px;" />
                    </a>
                    <a href="#" class="logo-sukma">
                        <img src="{{ asset('assets/images/Logo.png') }}" height="43px" alt="" />
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                
                    <ul class="nav">
                        <li>
                            <a class="js-scroll-trigger" href="#kontak" class="tentang"> <b>Kontak SISUKMA</b></a>
                        </li>
                        @guest
                        <li>
                            <a href="{{ route('login') }}" type="button">Masuk</a>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                @if (auth()->user()->hasRole('akademik'))
                                    <a class="dropdown-item" href="{{ route('akademik.dashboard') }}" >Dashboard</a>
                                @elseif(auth()->user()->hasRole('PPID'))
                                    <a class="dropdown-item" href="{{ route('ppid.dashboard') }}" >Dashboard</a>
                                @elseif(auth()->user()->hasRole('Unit-Kerja'))
                                    <a class="dropdown-item" href="{{ route('unit.dashboard') }}" >Dashboard</a>
                                @else
                                    <a class="dropdown-item" href="{{ route('home') }}" >Dashboard</a>
                                @endif
                                <a class="dropdown-item" href="{{ route('logout') }}"
            
                                   onclick="event.preventDefault();
            
                                                 document.getElementById('logout-form').submit();">
            
                                    {{ __('Logout') }}
            
                                </a>
            
            
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            
                                    @csrf
            
                                </form>
                            @endguest
                    </ul>
        
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>