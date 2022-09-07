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
                    <img src="{{ asset('storage/app/public/post/AboutUs/BannerImage1/' . $AboutUsBanner->image) }}"
                        width="100%" alt="">
                    <div class="title">
                        <div class="container">
                            <div class="row ">
                                <div class="col-8 text-left justfiy-content-center ml-5">
                                    <h1 class="animated slideInDown">{{ $AboutUsBanner->heading }}</h1>
                                    <hr>

                                    <p class="animated slideInLeft">{{ $AboutUsBanner->title }}</p>
                                    <a href="#" class="animated slideInRight btn btn-gold btn-p">Read More</a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="height: 600px; width:100%">
                    <img src="{{ asset('storage/app/public/post/AboutUs/BannerImage2/' . $AboutUsBanner->image2) }}"
                        width="100%" alt="">
                    <div class="title">
                        <div class="container">
                            <div class="row ">
                                <div class="col-8 text-left justfiy-content-center ml-5">
                                    <h1 class="animated slideInDown">{{ $AboutUsBanner->heading }}</h1>
                                    <hr>

                                    <p class="animated slideInLeft">{{ $AboutUsBanner->title }}</p>
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
    <div class="container mt-5 mb-5 border 1px p-3" style="border-radius: 20px">
        <div class="row ">
            <div class="col-md-5">
                <div class="" style="">
                    <img src="{{ asset('public/assets/images/abouts.jfif') }}" height="560px" width="100%"
                        style="border-radius:10px" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="row ">
                    <div class="col-12 mt-2">
                        <div class="row">
                            <div class="col-12 ">
                                <p class="alert alert-success">{{ $AboutUsSection->title }}</p>
                                <h1 class="mt-4 about_h2">{{ $AboutUsSection->heading }}</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p1 }}</li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p2 }}</li>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p3 }}</li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p4 }}</li>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p5 }}
                                    </li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>{{ $AboutUsSection->p6 }}</li>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
