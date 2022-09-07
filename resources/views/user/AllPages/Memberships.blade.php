<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
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
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}


    <h1 class="text-center about_h2">Membership Lots of Packages</h1>

    <div class="container">
        <div class="row pt-5 m-auto">
            <div class="col-md-5 offset-md-1  pb-3 ">
                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white whole_card ml-3 border-white border-0 ">
                    <div class="card-custom-img ">
                        <h3 class="m-2 h3 text-center text-light">STANDARD</h3>
                    </div>
                    <div class="rate-div">
                        <p class="text-center mt-4 rate-div-para">Lorem Ipsum is simply dummy text of the printing and
                            typesetting
                            industry. </p>
                        <h1 class="text-center mb-4">$550 <span class="font">/ YEAR</span></h1>
                        <div class="col-md-12 text-center">
                            <a href="{{ URL('/Registration-Form') }}" class="btn btn-success button_sub">Subscribe</a>
                        </div>

                    </div>
                    <div class="card-custom-avatar1 ">
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply dummy
                            text
                        </p>
                        <p class="text-center font-para pb-1"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <hr>
                    </div>
                    <div class="card-custom-avatar2 mt-2">
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply dummy
                            text
                        </p>
                    </div>
                </div>
                <!-- Copy until here -->
            </div>

            {{-- ======================================= --}}

            <div class="col-md-5  pb-3 ">
                <!-- Copy the content below until next comment -->
                <div class="card card-custom bg-white whole_card ml-3 border-white border-0">
                    <div class="card-custom-img ">
                        <h3 class="m-2 h3 text-center text-light">PREMIUM</h3>
                    </div>
                    <div class="rate-div">
                        <p class="text-center mt-4 rate-div-para">Lorem Ipsum is simply dummy text of the printing
                            and
                            typesetting
                            industry. </p>
                        <h1 class="text-center mb-4">$750 <span class="font">/ YEAR</span></h1>
                        <div class="col-md-12 text-center">
                            <a href="{{ URL('/Registration-Form') }}"
                                class="btn btn-secondary button_sub2">Subscribe</a>
                        </div>
                    </div>
                    <div class="card-custom-avatar1 ">
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para pb-1"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is
                            simply
                            dummy
                            text
                        </p>

                        <hr>
                    </div>
                    <div class="card-custom-avatar2 mt-2">
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                        <p class="text-center font-para"><i class="bi bi-check-lg mr-3"></i>Lorem Ipsum is simply
                            dummy
                            text
                        </p>
                    </div>
                </div>
                <!-- Copy until here -->

            </div>


        </div>

    </div>

    <div class="mt-5"></div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}


    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
