<!doctype html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    <h3 class="pt-1" id="button"> <i class="fa fa-angle-up text-white" aria-hidden="true"></i></i></h3>
    @include('user.userLayouts.LoginHeader')

    <!-- LOGIN MODAL -->
    <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-1"></div>
                    <div class="col-10 text-center">
                        <img src="public/assets/images/register.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-1 ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="modal-body px-4">
                    <form action="" method="" id="">
                        <div class="control-group form-group m-2 ">
                            <div class="">
                                <label for="" class="p-0 m-0 ">Email :</label>
                                <input
                                    class="input--style-1 input-group
                            input-group input-contact"
                                    type="email" placeholder="Enter Your Email Address" name="name">
                            </div>
                        </div>
                        <div class="control-group form-group m-2 ">
                            <div class="">
                                <label for="" class="p-0 m-0 ">Password :</label>
                                <input
                                    class="input--style-1 input-group
                            input-group input-contact"
                                    type="password" placeholder="Enter Your Password" name="password">
                            </div>
                        </div>
                        <div class="form-check m-2 ">
                            <input class="form-check-input" id="checkbox-id" type="checkbox" value=""
                                id="flexCheckDefault" />
                            <label class="form-check-label text-right" for="flexCheckDefault">Remember password</label>
                        </div>

                        <div class=" form-group m-2">
                            <a href="{{ URL('/Home') }}" type="submit" name="insert" id="insert" value=""
                                class="btn btn-success w-100">Login Here</a>
                        </div>
                        <div class=" form-group m-2">
                            <span class="reg_para"> Don't have GRM account ?</span> <a href="" type="button"
                                data-toggle="modal" data-target="#register" class="text-success">Sign-up</a>
                            <p><a href="" class="text-success">Forget password ?</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    {{-- Register Modal --}}
    <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="col-1"></div>
                    <div class="col-10 text-center">
                        <img src="public/assets/images/register.svg" alt="" class="img-fluid">
                    </div>
                    <div class="col-1 ">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                </div>
                <div class="modal-body px-4">
                    <form action="" method="" id="">
                        <div class="form-row m-2 ">
                            <div class="form-group  col-md-6">
                                <input type=" text" class="form-control input-group input--style-1 input-contact"
                                    name="fname" require placeholder="Enter First Name" required>
                            </div>

                            <div class="form-group  col-md-6 ">
                                <input type="text" class="form-control input-group input--style-1 input-contact"
                                    name="lname" require placeholder="Enter Last Name" required>
                            </div>
                        </div>
                        <div class="form-row m-2">
                            <div class="form-group  col-md-6 ">
                                <input type="text" class="form-control input-group input--style-1 input-contact"
                                    name="cname" require placeholder="Enter Company" required>
                            </div>

                            <div class="form-group  col-md-6 ">
                                <input type="email" class="form-control input-group input--style-1 input-contact"
                                    name="bemail" require placeholder="Enter Business email" required>
                            </div>
                        </div>
                        <div class="form-row m-2">
                            <div class="form-group  col-md-6 ">
                                <input type="password" class="form-control input-group input--style-1 input-contact"
                                    name="password" require placeholder="Enter password" required>
                            </div>

                            <div class="form-group   col-md-6 ">
                                <input type="password" class="form-control input-group input--style-1 input-contact"
                                    name="confirm_password" require placeholder="Re-Enter password" required>
                            </div>
                        </div>

                        <div class=" form-row col-12">
                            <a href="{{ URL('Memberships') }}" type="submit" name="insert" id="insert"
                                value="Register Here" class="btn btn-success w-100">Register Here</a>
                        </div>
                        <div class="form-row col-12 mt-3 ml-4 text-center">
                            <p class="reg-modal">By joining GRM you agree to GRM <u>Terms and Conditions of
                                    Use.</u><br>
                                Already have Scrapo account? <a href="" type="button" data-toggle="modal"
                                    data-target="#Login" class="text-success"> Log-in </a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    {{-- Card Section Starts --}}
    <section class="card__section pt-2 pb-2">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <span class="sp1">Showing Offer Posted Globally</span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="sp2">Price In</span>
                    <span class="sp-drop latest__art">
                        PKR
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                        <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-light" href="#">About Us</a>
                            <a class="dropdown-item text-light" href="#">Why Use GRM</a>
                        </div>
                    </span>
                    <span class="sp-drop latest__art">
                        MT
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-expanded="false">
                        </a>
                        <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-light" href="#">About Us</a>
                            <a class="dropdown-item text-light" href="#">Why Use GRM</a>
                        </div>
                    </span>
                </div>
            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Login-Product-view') }}" class="text-dark">
                                        <div class="card ">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle1.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">ABS
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle2.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">EPS <button
                                                            class="btn btn-onoff text-right">ON-OFF</button></h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle3.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">LDPE
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle1.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">ABS
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle2.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">EPS <button
                                                            class="btn btn-onoff text-right">ON-OFF</button></h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle3.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">LDPE
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-12 mt-2">
                    <div id="recipeCarousel2" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner w-100" role="listbox">
                            <div class="carousel-item active">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card ">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle2.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">ABS
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/offers.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">EPS <button
                                                            class="btn btn-onoff text-right">ON-OFF</button></h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle1.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">LDPE
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item ">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/offers.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">ABS
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/Rectangle2.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">EPS <button
                                                            class="btn btn-onoff text-right">ON-OFF</button></h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>

                            </div>
                            <div class="carousel-item">
                                <div class="col-md-4 mb-3">
                                    <a href="{{ URL('/Product-view') }}" class="text-dark">
                                        <div class="card">
                                            <img class=" card-img-top"
                                                src="{{ asset('public/assets/images/offers.svg') }}"
                                                class="head-2" alt="">
                                            <div class="card-body">
                                                <div class="row px-0 mx-0">
                                                    <h4 class="card-title w-100">LDPE
                                                        <button
                                                            class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                                    </h4>
                                                </div>
                                                <p class="card-text">Rs. 369,842.21 / MT</p>
                                            </div>
                                            <div class="card-footer foot d-flex">
                                                <i class="bi bi-geo-alt-fill text-dark"></i>
                                                <p class="pt-1 pl-1"> Karachi, Pakistan.</p>
                                                <div class="star">
                                                    <i class="bi bi-star-fill"></i><span
                                                        class="ml-2">4.8</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev w-auto" href="#recipeCarousel2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle"
                            aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next w-auto" href="#recipeCarousel2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle"
                            aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>
        </div>
        <script>
            $('#recipeCarousel').carousel({
                interval: 10000
            })

            $('.carousel .carousel-item').each(function() {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            })
            $('#recipeCarousel2').carousel({
                interval: 10000
            })

            $('.carousel .carousel-item').each(function() {
                var minPerSlide = 3;
                var next = $(this).next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }
                next.children(':first-child').clone().appendTo($(this));

                for (var i = 0; i < minPerSlide; i++) {
                    next = next.next();
                    if (!next.length) {
                        next = $(this).siblings(':first');
                    }

                    next.children(':first-child').clone().appendTo($(this));
                }
            });
        </script>
    </section>

    {{-- Services Section Starts --}}
    <div class="services__section">
        <div class="container mt-5">
            <div class="row px-0 mx-0 pt-5">
                <div class="col-md-6 p-3">
                    <h4 class="latest__art">SERVICES_____</h4>
                    <h1 class="text-light">WE SERVE THE PERFECT
                        SERVICES <span class="latest__art">FOR YOU</span>
                    </h1>
                    <p class="text-justify">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry. Lorem Ipsum has been
                        the industry's standard dummy text ever
                    </p>
                </div>
                <div class="col-md-3 p-3 dark__card">
                    <div class="row px-0 mx-0">
                        <div class="col  d-flex">
                            <div class="img w-100"> <img src="{{ asset('public/assets/images/bank.svg') }}"
                                    class="p-2" alt=""></div>
                            <div class="arrow pt-2"><img src="{{ asset('public/assets/images/arrow.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <h4>Shipping Line</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit molestias odio autem sed deleniti
                        possimus nesciunt impedit aspernatur a doloribus?
                    </p>
                </div>
                <div class="col-md-3 p-3">
                    <div class="row px-0 mx-0">
                        <div class="col  d-flex">
                            <div class="img w-100"> <img src="{{ asset('public/assets/images/bank.svg') }}"
                                    class="p-2" alt="">
                            </div>
                            <div class="arrow pt-2"><img src="{{ asset('public/assets/images/arrow.svg') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <h4>Waste Management Service Provider</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit molestias odio autem sed deleniti
                        possimus nesciunt impedit aspernatur a doloribus?
                    </p>
                </div>
                <div class="row px-0 mx-0 pb-5">
                    <div class="col-md-3 bg-success-service p-3">
                        <div class="row px-0 mx-0">
                            <div class="col  d-flex">
                                <div class="img w-100"> <img src="{{ asset('public/assets/images/bank.svg') }}"
                                        class="p-2" alt="">
                                </div>
                                <div class="arrow pt-2"><img src="{{ asset('public/assets/images/arrow.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <h4>Banks</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam dolorem ipsam quidem facere
                            natus
                            labore iusto, consequatur culpa atque accusamus.
                        </p>
                    </div>
                    <div class="col-md-3 p-3 dark__card">
                        <div class="row px-0 mx-0">
                            <div class="col  d-flex">
                                <div class="img w-100"> <img src="{{ asset('public/assets/images/bank.svg') }}"
                                        class="p-2" alt="">
                                </div>
                                <div class="arrow pt-2"><img src="{{ asset('public/assets/images/arrow.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <h4>Inspection Service Provider</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit molestias odio autem sed
                            deleniti
                            possimus nesciunt impedit aspernatur a doloribus?
                        </p>
                    </div>
                    <div class="col-md-3 p-3">
                        <div class="row px-0 mx-0">
                            <div class="col  d-flex">
                                <div class="img w-100"> <img src="{{ asset('public/assets/images/bank.svg') }}"
                                        class="p-2" alt="">
                                </div>
                                <div class="arrow pt-2"><img src="{{ asset('public/assets/images/arrow.svg') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <h4>Recycling Machinery Supplier</h4>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam dolorem ipsam quidem facere
                            natus
                            labore iusto, consequatur culpa atque accusamus.
                        </p>
                    </div>
                    <div class="col-md-3 p-3 dark__card text-center">
                        <a href="{{ route('all-services') }} " class="btn btn-success btn-services">ALL SERVICES <i
                                class="bi bi-plus-circle-fill ml-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="pt-5 container ">
        <h1 class="text-center mt-5 mb-5">TENDERS</h1>
        <div class="row ">
            <div class="col-md-12 col-sm-4">
                <table class="table table-bordered table-hover mt-2 table-responsive">
                    <thead>
                        <tr>
                            <th>REF NO.</th>
                            <th>Description</th>
                            <th>Opening date</th>
                            <th>Closing date</th>
                            <th>Location</th>
                            <th>Amount</th>
                            <th>STATUS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td> <a href="{{ URL('Tenders-Detail') }}" class="text-dark">Lorem Ipsum is simply
                                    dummy text
                                    of the printing and typeseting</a></td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status w-100 p-2">Open</span></td>
                        </tr>

                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td>Lorem Ipsum is simply dummy text
                                of the printing and typeseting </td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status_closed bg-danger p-2">CLOSED</span></td>
                        </tr>

                        <tr data-widget="expandable-table" aria-expanded="false">
                            <td>#3576866</td>
                            <td>Lorem Ipsum is simply dummy text
                                of the printing and typeseting </td>
                            <td>22/DEC/2020</td>
                            <td>15/JAN/2022</td>
                            <td>Lahore, Pkaistan.</td>
                            <td>$8500</td>
                            <td><span class="btn-ongoing_status w-100 p-2">Open</span></td>
                        </tr>
                        </a>
                    </tbody>
                </table>
                {{-- {!! $dataTable->table() !!} --}}
            </div>
        </div>
        </div>
    </section>
    {{-- Waste Section Start --}}
    <div class="waste__section">
        <div class="container">
            <div class="row px-0 mx-0">
                <div class="col">
                    <h3 class="text-center mt-5">WASTE REGULATIONS</h3>
                    <h5 class="text-center text-success latest__art">___KNOWLEDGE CENTER___</h5>
                </div>
            </div>
            <div class="row px-0 mx-0 mt-5 mb-5">
                <div class="col-md-6">
                    <img src="{{ asset('public/assets/images/waste_img.svg') }}" height="350" width="350px"
                        class="head-2 img-fluid">
                </div>
                <div class="col-md-6 text-justify mb-5">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                        It has survived not only five centuries, but also the leap into electronic typesetting,
                        remaining essentially unchanged.
                    </p>
                    <div class="row">
                        <div class="col-md-12  ">
                            <form>
                                <div class="form-group">
                                    <select name="country" class="form-control reg_para ">
                                        <option>Waste Move From :</option>
                                        <option>Pakistan</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <select name="country" class="form-control reg_para ">
                                        <option>Waste Move To :</option>
                                        <option>Pakistan</option>
                                        <option>india</option>
                                        <option>Australia</option>
                                        <option>Bahamas</option>
                                        <option>Bahrain</option>
                                        <option>Bangladesh</option>
                                        <option>Belgium</option>
                                        <option>Canada</option>
                                        <option>China</option>
                                        <option>Colombia</option>
                                        <option>Egypt</option>
                                        <option>Iran</option>
                                    </select>
                                    @error('country')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type=" submit" class="btn btn-success">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <hr width="40" style="border:1px solid #52AE32">
                </div>
            </div>
            <div class="row px-0 mx-0 mt-5">
                <div class="col-12">
                    <div class="heading__waste">
                        <h5 class="latest__art">LATEST ARTICLES___

                            <button class="btn btn-success waste text-right">See
                                All</button>
                        </h5>
                        <h4>RECYCLING KNOWLEDGE CENTER</h4>
                    </div>
                </div>
            </div>
            <div class="row px-0 mx-0 ">
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <img src=" {{ asset('public/assets/images/latest1.svg') }}" alt="">
                        <div class="card-body">
                            <span class="text-secondary">December 13, 2021</span>
                            <h5 class="card-title">Top 15 Secrete Business
                                Ideas Next Levels
                            </h5>
                            <a href="#" class="btn btn-success "><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <img src=" {{ asset('public/assets/images/latest1.svg') }}" alt="">
                        <div class="card-body">
                            <span class="text-secondary">December 13, 2021</span>
                            <h5 class="card-title">Top 15 Secrete Business
                                Ideas Next Levels
                            </h5>
                            <a href="#" class="btn btn-success"><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mt-2">
                    <div class="card">
                        <img src=" {{ asset('public/assets/images/latest1.svg') }}" alt="">
                        <div class="card-body">
                            <span class="text-secondary">December 13, 2021</span>
                            <h5 class="card-title">Top 15 Secrete Business
                                Ideas Next Levels
                            </h5>
                            <a href="#" class="btn btn-success "><i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <hr width="40" style="border:1px solid #52AE32">
                </div>
            </div>
        </div>
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}


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
    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}


</body>

</html>
