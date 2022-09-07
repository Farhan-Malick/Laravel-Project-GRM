<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}

    <h1 class="text-center">Product View</h1>

    <div class="container mt-3 pt-5 border 1px">
        <div class="row  m-1">
            <div class="col-md-6 trade2">
                <div class="" style="height: 350px">
                    <img src="{{ asset('storage/app/public/post/usersAd1/' . $approval->image1) }}"
                        class="img-fluid" alt="" style="height: 350px" width="100%">
                </div>
            </div>
            <div class="col-md-6  trade2 ">
                <h3>{{ $approval->Client_ads_cat->category }}</h3>
                <hr class="bg-success">
                <p class="reg_para">{{ $approval->description }}</p>
                <div class="btn-div ">
                    <button class="btn btn-primary ">{{ $approval->currency }}-{{ $approval->price }}
                    </button>
                </div>
                @if (Auth::user())
                    <div class="row ">
                        <div class="chat_with_seller col-12 pt-5 text-center">
                            <a href="{{ URL('chatify', $approval->user_id) }}"
                                class="btn btn-success w-100 view-btn2 "><i class="bi bi-chat mr-2"></i>Chat with
                                seller</a>
                        </div>
                    </div>
                @else
                    <div class="row">
                        <div class="col-md-12 trade2 alert alert-danger mt-5">
                            <h6 class="text-center">Want chat with a seller? You have to Login First</h6>
                        </div>
                    </div>
                @endif

            </div>
        </div>
        <br>
        <div class="row m-1">
            <div class="col-md-8  trade2">
                <h5>Details</h5>
                <hr class="bg-success">
                <table class="table table-responsive w-100">
                    <tr class="table_tr">
                        <th>Category:</th>
                        <td class="table_tr_td">{{ $approval->Client_ads_cat->category }}</td>
                    </tr>
                    <tr class="table_tr">
                        <th>Quantity Available:</th>
                        <td class="table_tr_td">{{ $approval->quantity_avl }}</td>
                    </tr>
                    <tr class="table_tr">
                        <th>Unit (Weight):</th>
                        <td class="table_tr_td">{{ $approval->unit_weight }}</td>
                    </tr>
                    <tr class="table_tr">
                        <th>Supply Type:</th>
                        <td class="table_tr_td"><span class="text-success"><b>{{ $approval->supply_type }}
                                </b></span>
                        </td>
                    </tr>
                    <tr class="table_tr">
                        <th>Pricing Terms:</th>
                        <td class="table_tr_td">{{ $approval->p_terms }}</td>
                    </tr>
                    <tr class="table_tr">
                        <th>Location:</th>
                        <td class="table_tr_td">{{ $approval->col_address }}</td>
                    </tr>
                </table>
            </div>
            <div class="col-md-4 trade2">
                <h5>Seller</h5>
                <hr class="bg-success">
                <div class="container border 1px">
                    <div class="text-center">
                        <img src="{{ asset('public/assets/images/1.png') }}" class="img_div" alt="">
                    </div>
                    <div class="info">
                        <h3 class="text-center">
                            @if ($approval->user_id)
                                <b>{{ $approval->clientuser->name }} {{ $approval->clientuser->lname }}</b>
                            @else
                                <b>Un-Authorized User</b>
                            @endif
                        </h3>
                        <h5 class="text-center">Inner Art Interiors</h5>
                        <p class="text-center">{{ $approval->location }}, {{ $approval->country }}</p>
                        <h5 class="text-center text-primary"><i class="bi bi-star mr-2"></i>Premium Member</h5>
                    </div>
                    <div class="row ">
                        <div class="chat_with_seller col-12 pt-3 pb-3 text-center">
                            <a class="btn btn-success w-100 view-btn2 "
                                href="{{ route('Profile/', ['id' => $approval->user_id]) }}"><i
                                    class="bi bi-person-circle mr-2"></i>View
                                Profile</a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="trade2 row w-100 mb-3 m-1 mt-3">
                <div class="text-light   p_div col-md-12  pt-3 pb-3 ">
                    <h5 class="">Upgrade to Premium</h5>
                    <p>
                        <a href="{{ URL('Memberships') }}"> to unlock all benefits of GRM, to sell & buy more
                            material</a>
                        <span><u><a href="#" class="p_div_learn">LEARN MORE</a></u></span>
                    </p>
                </div>
            </div>
        </div>
        <section class="card__section pt-2 pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <h3>Offers by Mohib <span><a href="" class="btn btn-success see_all trade2">See All</a></span>
                        </h3>
                        <hr class="bg-success">
                    </div>
                </div>
                <div class="row trade2">
                    <div class="col-12 mt-2">
                        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
                            <div class="carousel-inner w-100" role="listbox">
                                <div class="carousel-item active">
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
                                            <div class="card ">
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
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
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
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
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
                                <div class="carousel-item ">
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
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
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
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
                                    <div class="col-md-4  mb-3">
                                        <a href="{{ URL('#') }}" class="text-dark">
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
    </div>
    </div>

    {{-- Footer Start --}}
    <div class="mt-5"></div>
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}


    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
