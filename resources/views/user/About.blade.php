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
                                <p class="alert alert-success">Complete Commercial And Residential Global Recycling
                                    Marketplace</p>
                                <h1 class="mt-4 about_h2">We Are Pioneers In The World Of Recycling!</h1>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li> Wouldn't it be great if there was one place where you could go
                                        to find all your recycling needs?</li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>Global Recycling Market is the world's first online platform
                                        which provides complete solutions for recycling industry.</li>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>We help you find everything from trading recyclables to
                                        locating
                                        suppliers of any kind in an easy way!</li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li>The Global Recycling Market is a one-stop solution for all
                                        your
                                        recycling needs.</li>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <p class="reg_para">
                                    <li> We've got listings on all commodities available - even Live
                                        Tenders! We also have GRM Store where you can buy all your required consumables!
                                    </li>
                                </p>
                            </div>
                            <div class="col-6">
                                <p class="reg_para">
                                    <li> We're on a mission to help build the sustainable future by
                                        connecting recyclers with our innovative platform. Our services are not just for
                                        traders; this platform provides everything that's needed in order run your
                                        business
                                        smoothly and efficiently!.</li>

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
