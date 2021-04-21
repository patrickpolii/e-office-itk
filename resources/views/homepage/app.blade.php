<!DOCTYPE html>
<html lang="en">
    <head>
        @include('homepage.head')
    </head>
    <body>
        @include('homepage.navbar')
        <!-- ***** Header Area End ***** -->
        <header class="masthead d-flex">
            @include('homepage.header') 
        </header>
        <div class="container">
            @include('homepage.about')
        </div>

        <section class="section home-feature">
            <div class="container2">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="col-lg-12 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                            <div class="features-small-item">
                                <div class="panel panel-default" id="kirim-surat">
                                    <div class="panel-heading" style="font-size: 19px;"><strong>Bukan bagian dari ITK, tapi ingin mengirimkan surat? Silahkan mengisi form dibawah ini</strong> </div>
                                   @include ('homepage.form')
                                </div>
                            </div>
                            <!-- ***** Features Small Item End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            @include('homepage.footer')
        </footer>
    @include('homepage.scripts')
    </body>

</html>