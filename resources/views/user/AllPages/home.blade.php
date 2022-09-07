<!doctype html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<head>
    <style>
        thead {
            background-color: rgb(224, 224, 224);
        }

        tfoot {
            background-color: rgb(224, 224, 224);
        }

        .md-country-picker-item {
            position: relative;
            line-height: 20px;
            padding: 10px 0 10px 40px;
        }

        .md-country-picker-flag {
            position: absolute;
            left: 0;
            height: 20px;
        }

        .mbsc-scroller-wheel-item-2d .md-country-picker-item {
            transform: scale(1.1);
        }

    </style>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>

</head>

<body>
    <h3 class="pt-1" id="button"> <i class="fa fa-angle-up text-white" aria-hidden="true"></i></i></h3>
    @include('user.userLayouts.Header')

    <!-- LOGIN MODAL -->
    {{-- <div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
    </div> --}}
    {{-- Register Modal --}}
    {{-- <div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
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
                                    name="name" require placeholder="Enter First Name" required>
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
    </div> --}}
    {{-- Card Section Starts --}}
    <section class="card__section pt-2 pb-2">
        <div class="container">
            <div class="row m-2">
                <div class="col-md-6 ">
                    <span class="sp1 ">Showing Offer Posted Globally</span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="sp2  ">Price In</span>
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
                <div class="owl-carousel  owl-theme" id="ads-carousel">
                    @foreach ($approval as $item)
                        <div class="item">
                            <a href="{{ url('Ad-view/' . $item->id) }}" class="text-dark"
                                style="text-decoration: none">
                                <div class="card">
                                    <div class="">
                                        <img src="{{ asset('storage/app/public/post/usersAd1/' . $item->image1) }}"
                                            alt="Ads" height="210px">
                                    </div>
                                    <div class="card-body">
                                        <div class="row px-0 mx-0">
                                            <span class="card-title w-100">
                                                <b>{{ $item->Client_ads_cat->category }}</b>
                                                <button class="btn btn-success btn-ongoing text-right">ONGOING</button>
                                            </span>
                                        </div>
                                        <span class="card-text">Rs. {{ $item->price }} /
                                            {{ $item->unit_weight }}</span>
                                    </div>
                                    <div class="card-footer foot d-flex">
                                        <i class="bi bi-geo-alt-fill text-dark"></i>
                                        <p class="pt-1 pl-1">
                                            {{ $item->location }}, {{ $item->country }}</p>
                                        <div class="star">
                                            <i class="bi bi-star-fill"></i><span class="ml-2">4.8</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <script>
                $('#ads-carousel').owlCarousel({
                    // loop: true,
                    margin: 10,
                    nav: true,
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        1000: {
                            items: 3
                        }
                    }
                })
            </script>
        </div>
    </section>
    {{-- Services Section Starts --}}
    @foreach ($service as $item)
        <div class="services__section">
            <div class="container mt-5">
                <div class="row px-0 mx-0 pt-5">
                    <div class="col-md-6 p-3">
                        <h4 class="latest__art">SERVICES_____</h4>
                        <h1 class="text-light">{{ $item->h1_b1 }}</h1>
                        <p class="text-justify">{{ $item->p1_b1 }}</p>
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
                        <h4>{{ $item->h2_b2 }}</h4>
                        <p>{{ $item->p2_b2 }}</p>
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
                        <h4>{{ $item->h3_b3 }}</h4>
                        <p>{{ $item->p3_b3 }}</p>
                    </div>
                    <div class="row px-0 mx-0 pb-5">
                        <div class="col-md-3 bg-success-service p-3">
                            <div class="row px-0 mx-0">
                                <div class="col  d-flex">
                                    <div class="img w-100"> <img
                                            src="{{ asset('public/assets/images/bank.svg') }}" class="p-2"
                                            alt="">
                                    </div>
                                    <div class="arrow pt-2"><img
                                            src="{{ asset('public/assets/images/arrow.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h4>{{ $item->h4_b4 }}</h4>
                            <p>{{ $item->p4_b4 }}</p>
                        </div>
                        <div class="col-md-3 p-3 dark__card">
                            <div class="row px-0 mx-0">
                                <div class="col  d-flex">
                                    <div class="img w-100"> <img
                                            src="{{ asset('public/assets/images/bank.svg') }}" class="p-2"
                                            alt="">
                                    </div>
                                    <div class="arrow pt-2"><img
                                            src="{{ asset('public/assets/images/arrow.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h4>{{ $item->h5_b5 }}</h4>
                            <p>{{ $item->p5_b5 }}</p>
                        </div>
                        <div class="col-md-3 p-3">
                            <div class="row px-0 mx-0">
                                <div class="col  d-flex">
                                    <div class="img w-100"> <img
                                            src="{{ asset('public/assets/images/bank.svg') }}" class="p-2"
                                            alt="">
                                    </div>
                                    <div class="arrow pt-2"><img
                                            src="{{ asset('public/assets/images/arrow.svg') }}" alt="">
                                    </div>
                                </div>
                            </div>
                            <h4>{{ $item->h6_b6 }}</h4>
                            <p>{{ $item->p6_b6 }}</p>
                        </div>
                        <div class="col-md-3 p-3 dark__card text-center">
                            <a href="{{ route('all-services') }} " class="btn btn-success btn-services">ALL SERVICES
                                <i class="bi bi-plus-circle-fill ml-2"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <section class="container mt-5 reg_para">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center mb-4 ">__TENDERS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    @if (session('msg'))
                        <div class="col-sm-6 mx-auto " style="text-align: center;  font-size:20px">
                            {{ session('msg') }}</div>
                    @endif
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data-table-default" class="table table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th width="">ID</th>
                                    <th style="width:15%">Name</th>
                                    <th style="width:30%">Description</th>
                                    <th>Opening date</th>
                                    <th>Closing date</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th style="width:15%">Status</th>
                                    <th style="width:15%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tender as $tenders)
                                    <tr class="odd gradeX">
                                        <td class="f-s-600 text-inverse">
                                            {{ $tenders->id }}</td>
                                        <td>
                                            @if ($tenders->user_id)
                                                <b>{{ $tenders->Seller_tender->name }}
                                                    {{ $tenders->Seller_tender->lname }}</b>
                                            @else
                                                <b>Un-Authorized User</b>
                                            @endif
                                        </td>
                                        <td>{{ $tenders->description }}</td>
                                        <td>{{ $tenders->odate }}</td>
                                        <td>{{ $tenders->cdate }}</td>
                                        <td>{{ $tenders->location }}</td>
                                        <td>{{ $tenders->amount }}</td>
                                        <td>
                                            @if ($tenders->status == 'Open')
                                                <span class="p-2 bg-success mt-2 text-white"
                                                    style="border-radius: 60px">{{ $tenders->status }}</span>
                                            @else
                                                <span class="p-2 bg-danger mt-2 text-white"
                                                    style="border-radius: 60px">{{ $tenders->status }}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ URL('Tenders-Detail/' . $tenders->id) }}"
                                                class="btn btn-primary reg_para">View</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                            <tfoot>
                                <tr>
                                    <th width="">ID</th>
                                    <th style="width:15%">Name</th>
                                    <th style="width:30%">Description</th>
                                    <th>Opening date</th>
                                    <th>Closing date</th>
                                    <th>Location</th>
                                    <th>Amount</th>
                                    <th style="width:15%">Status</th>
                                    <th style="width:15%">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </section>
    {{-- Waste Section Start --}}
    @foreach ($waste as $item)
        <div class="waste__section">
            <div class="container">
                <div class="row px-0 mx-0">
                    <div class="col">
                        <h3 class="text-center mt-5">{{ $item->heading1 }}</h3>
                        <h5 class="text-center text-success latest__art">{{ $item->heading2 }}</h5>
                    </div>
                </div>
                <div class="row px-0 mx-0 mt-5 mb-5">
                    <div class="col-md-6">
                        <img src="{{ asset('storage/app/public/post/home/background/' . $item->image) }}"
                            height="350" width="350px" class="head-2 img-fluid">
                    </div>
                    <div class="col-md-6 text-justify mb-5">
                        <p>{{ $item->paragraph }}</p>
                        <div class="row">
                            <div class="col-md-12  ">
                                <form>
                                    <div class="form-group">
                                        <select class="form-control reg_para " id="selectCountry" name="selectCountry">
                                            <option value="">Waste Move From :</option>
                                        </select>
                                        @error('selectCountry')
                                            <span>{{ $message }}</span>
                                        @enderror
                                        <script>
                                            var select = document.getElementById("selectCountry");

                                            var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica",
                                                "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                                                "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                                                "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi",
                                                "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China",
                                                "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica",
                                                "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
                                                "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
                                                "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana",
                                                "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras",
                                                "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
                                                "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait",
                                                "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
                                                "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                                                "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco",
                                                "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                                                "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
                                                "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome",
                                                "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia",
                                                "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname",
                                                "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo",
                                                "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine",
                                                "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela",
                                                "Vietnam", "Yemen", "Zambia", "Zimbabwe");

                                            //console.log(countries);
                                            //console.log(select);

                                            for (var i = 0; i < countries.length; i++) {

                                                var option = document.createElement("option");
                                                //for every turn of the loop create an option tag
                                                //console.log(option);
                                                var txt = document.createTextNode(countries[i]);
                                                //for every turn of the loop create the inner text
                                                //console.log(txt);
                                                option.appendChild(txt);
                                                //for every turn of the loop put the words from txt inside the <option> tags
                                                //console.log(option);
                                                option.setAttribute("value", countries[
                                                    i]); //for every turn of the loop set the value attribute to corresponding country name
                                                //console.log(option);
                                                select.insertBefore(option, select.lastChild);
                                                //console.log(select);

                                            }

                                            document.addEventListener('DOMContentLoaded', function() {
                                                //console.log('DOM fully loaded and parsed');
                                                document.querySelector('select[name="selectCountry"]').onchange = alertCountry;
                                            }, false);

                                            // function alertCountry(event) {
                                            //     //console.log('DOM loaded');
                                            //     //use "this" to refer to selected element
                                            //     if (!event.target.value) alert('Please select a country');
                                            //     else alert('You chose ' + event.target.value + '. Yay, grab a beer!');
                                            // }
                                        </script>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control reg_para " id="selectWasteCountry"
                                            name="selectWasteCountry">
                                            <option value="">Waste Move To :</option>
                                        </select>
                                    </div>
                                    @error('selectWasteCountry')
                                        <span>{{ $message }}</span>
                                    @enderror
                                    <script>
                                        var select = document.getElementById("selectWasteCountry");

                                        var countries = new Array("Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antarctica",
                                            "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain",
                                            "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia",
                                            "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burma", "Burundi",
                                            "Cambodia", "Cameroon", "Canada", "Cape Verde", "Central African Republic", "Chad", "Chile", "China",
                                            "Colombia", "Comoros", "Congo, Democratic Republic", "Congo, Republic of the", "Costa Rica",
                                            "Cote d'Ivoire", "Croatia", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica",
                                            "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea",
                                            "Estonia", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana",
                                            "Greece", "Greenland", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras",
                                            "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy",
                                            "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kuwait",
                                            "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania",
                                            "Luxembourg", "Macedonia", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta",
                                            "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Mongolia", "Morocco",
                                            "Monaco", "Mozambique", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger",
                                            "Nigeria", "Norway", "Oman", "Pakistan", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines",
                                            "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Samoa", "San Marino", " Sao Tome",
                                            "Saudi Arabia", "Senegal", "Serbia and Montenegro", "Seychelles", "Sierra Leone", "Singapore", "Slovakia",
                                            "Slovenia", "Solomon Islands", "Somalia", "South Africa", "Spain", "Sri Lanka", "Sudan", "Suriname",
                                            "Swaziland", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Togo",
                                            "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Uganda", "Ukraine",
                                            "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela",
                                            "Vietnam", "Yemen", "Zambia", "Zimbabwe");

                                        //console.log(countries);
                                        //console.log(select);

                                        for (var i = 0; i < countries.length; i++) {

                                            var option = document.createElement("option");
                                            //for every turn of the loop create an option tag
                                            //console.log(option);
                                            var txt = document.createTextNode(countries[i]);
                                            //for every turn of the loop create the inner text
                                            //console.log(txt);
                                            option.appendChild(txt);
                                            //for every turn of the loop put the words from txt inside the <option> tags
                                            //console.log(option);
                                            option.setAttribute("value", countries[
                                                i]); //for every turn of the loop set the value attribute to corresponding country name
                                            //console.log(option);
                                            select.insertBefore(option, select.lastChild);
                                            //console.log(select);

                                        }

                                        document.addEventListener('DOMContentLoaded', function() {
                                            //console.log('DOM fully loaded and parsed');
                                            document.querySelector('select[name="selectWasteCountry"]').onchange = alertCountry;
                                        }, false);

                                        // function alertCountry(event) {
                                        //     //console.log('DOM loaded');
                                        //     //use "this" to refer to selected element
                                        //     if (!event.target.value) alert('Please select a country');
                                        //     else alert('You chose ' + event.target.value + '. Yay, grab a beer!');
                                        // }
                                    </script>
                                    <button type=" submit" class="btn btn-success">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <hr width="40" style="border:1px solid #52AE32">
                    </div>
                </div>
    @endforeach
    <div class="row px-0 mx-0 mt-5">
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
    <div class="row">
        <div class="owl-carousel  owl-theme" id="latest-carousel">
            @foreach ($latest_article as $item)
                <div class="item">
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
        <script>
            $('#latest-carousel').owlCarousel({
                // loop: true,
                margin: 10,
                nav: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 3
                    }
                }
            })
        </script>
    </div>
    <div class="row px-0 mx-0 ">
        <div class="col">
            <hr width="40" style="border:1px solid #52AE32">
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
