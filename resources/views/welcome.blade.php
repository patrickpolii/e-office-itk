<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISUKMA</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/bootstrap-4.5.2-dist/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font.css') }}">
    </head>
    
    <body>
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
                            @if (Route::has('login'))
                         <div>
                            @auth
                                <a href="{{ url('/home') }}">Home</a>
                                 @else
                                 <a href="{{ route('login') }}">Login</a>
                            @endauth
                         </div>
                         @endif
                            <ul class="nav">
                                <li>
                                    <a class="js-scroll-trigger" href="#kontak" class="tentang"> <b>Kontak SISUKMA</b></a>
                                </li>
                                <li>
                                    <button type="button" id="tombol-navbar" class="btn btn-outline-primary">Login</button>
                                </li>
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
        <!-- ***** Header Area End ***** -->
        <header class="masthead d-flex">
            <div class="container text-center my-auto">
              <h1 class="mb-1">SELAMAT DATANG DI SISUKMA ITK</h1>
              <a class="btn btn-primary btn-xl js-scroll-trigger" href="#tentang">Tentang SISUKMA</a>
            </div>
            <div class="overlay"></div>   
          </header>
        <div class="container">
            <div class="row">
                <div class="col-md-12 about text-center" id="tentang">
                    <h1><b>SISUKMA ITK</b> Manajamen E-Office</h1>
                    <h4>"Merupakan sistem informasi manajemen e-office berbasis web yang berfokus pada pengelolan persuratan yang berada di lingkungan Kampus Institut Teknologi Kalimantan"</h4>
                    
                    <div class="row-padding">
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#kirim-surat" class="btn">Mengirim Surat</a>
                    </div>
                </div>
            </div>

        </div>

        <section class="section home-feature">
            <div class="container2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="panel panel-default" id="kirim-surat">
                                    <div class="panel-heading" style="font-size: 19px;"><strong>Bukan bagian dari ITK, tapi ingin mengirimkan surat? Silahkan mengisi form dibawah ini</strong> </div>
                                    <form style="padding: 40px;">
                                        
                                        <div class="form-group">
                                            <label class="form_style">
                                                Nama Instansi
                                                <input class="input" type="text" placeholder="Nama Instansi">
                                            </label>
                                            <label class="form_style">
                                                Email
                                                <input class="input" type="text" placeholder="Email">
                                            </label>
                                            <label class="form_style">
                                                Tujuan Surat
                                                <input class="input" type="text" placeholder="Tujuan Surat">
                                            </label>    
                                        </div>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="inputGroupFile04">
                                                <label class="custom-file-label" for="inputGroupFile04">Lampiran</label>
                                            </div>
                                        </div>
    
                                        <div class="footer-right">
                                            <button class="btn btn-primary" type="submit" data-attach-loading="" style="margin-top: 10px;">KIRIM</button>
                                        </div>
    
                                    </form>
                                </div>
                            </div>
                            <!-- ***** Features Small Item End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <section class="row row-padding text-center kontak-sukma" id="kontak">
                <div class="col-md-6 offset-md-3 head-section"> 
                    <h3>Kontak SISUKMA</h3>
                </div>
                <div class="col-md-4">
                   <img src="{{ asset('assets/images/map.png') }}" alt="" style="height: 55px;">
                   <h6>Jl. Soekarno-Hatta Km.15, Karang Joang, Balikpapan, Kalimantan Timur, 76127</h6>
                </div>
                <div class="col-md-4">
                    <img src="{{ asset('assets/images/telephone.png') }}" alt="" style="height: 44px;">
                    <h6>0542-8530801</h6>
                 </div>
                 <div class="col-md-4">
                    <img src="{{ asset('assets/images/email.png') }}" alt="" style="height: 50px;">
                    <h6>humas@itk.ac.id</h6>
                 </div>
            </section>
            <section class="row-divider">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="copyright">Copyright© 2020 Institut Teknologi Kalimantan - Design: Patrick Polii</p>
                    </div>
                </div>    
            </section>
            
        </footer>
    <!-- jQuery -->
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('assets/js/popper.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <!-- Plugins -->
    <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('assets/js/imgfix.min.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    </body>

</html>