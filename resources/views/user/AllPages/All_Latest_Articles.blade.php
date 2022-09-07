<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    <h3 class="pt-1" id="button"> <i class="fa fa-angle-up text-white" aria-hidden="true"></i></i></h3>
    <script>
        var btn = $('#button');

        $(window).scroll(function() {
            if ($(window).scrollTop() > 300) {
                btn.addClass('show');
            } else {
                btn.removeClass('show');
            }
        });

        btn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, '300');
        });
    </script>
    {{-- First Section Ends --}}
    <div id="slider2">
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active" style="height: 600px; width:100%">
                    <img src="{{ asset('public/assets/images/abt.webp') }}" width="100%" alt="">
                    <div class="title">
                        <div class="container">
                            <div class="row ">
                                <div class="col-8 text-left justfiy-content-center ml-5">
                                    <h1 class="animated slideInDown">ALL LATEST ARTICLES</h1>
                                    <hr>

                                    <p class="animated slideInLeft">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Beatae libero alias quas unde, ipsam, magnam veniam dolorum quos, eum
                                        reiciendis minus delectus odit corporis! Possimus maiores laudantium ut commodi
                                        quidem?</p>
                                    <a href="#" class="animated slideInRight btn btn-gold btn-p">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 600px; width:100%">
                    <img src="{{ asset('public/assets/images/abt2.jpg') }}" alt="">
                    <div class="title">
                        <div class="container">
                            <div class="row">
                                <div class="col-8 text-left justfiy-content-center ml-5">
                                    <h1 class="animated slideInDown">ABOUT US</h1>
                                    <hr>

                                    <p class="animated slideInLeft">Lorem, ipsum dolor sit amet consectetur adipisicing
                                        elit. Beatae libero alias quas unde, ipsam, magnam veniam dolorum quos, eum
                                        reiciendis minus delectus odit corporis! Possimus maiores laudantium ut commodi
                                        quidem?</p>
                                    <a href="#" class="animated slideInRight btn btn-gold btn-p">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container mt-5 mb-5 " style="border-radius: 20px">
        <div class="row px-0 mx-0 mt-1">
            <div class="col-12">
                <div class="heading__waste">
                    <h5 class="latest__art">LATEST ARTICLES__

                        <a href="{{ URL('/All-Latest-Article') }}" class="btn btn-success waste text-right">See
                            All</a>
                    </h5>
                    <h4>RECYCLING KNOWLEDGE CENTER</h4>
                </div>
            </div>
        </div>
        <hr class="bg-success">
        <div class="row">
            @foreach ($latest_article as $item)
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <img src=" {{ asset('storage/app/public/post/home/LA/' . $item->limage) }}" alt="">
                        <div class="card-body">
                            <span class="text-secondary">{{ $item->date }}</span>
                            <h5 class="card-title">{{ $item->title }}
                            </h5>
                            <a href="#" class="btn btn-success "><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}


    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
