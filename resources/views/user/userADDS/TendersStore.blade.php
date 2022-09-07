<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GRM</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <link rel="icon" href="{{ asset('assets/images/GRMLogoFinal3.svg') }}" type="image/icon type">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('public/font-awesome/css/font-awesome.min.css') }}">

    <style>
        .footer {
            background-color: #004457;
            margin-top: auto;
        }

        .foot__con {
            margin-top: 50px;
        }

        .footer ul li {
            list-style: none;
            color: white;
        }

        .foot__con i {
            color: #52AE32
        }

        .header {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 100vh;
        }

        .headerabout {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            height: 75vh;
        }

        .head_row {
            position: absolute;
            margin: 0;
            top: 33%;
            max-width: 1140px;
        }

        .map-container {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-container iframe {
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            position: absolute;
        }

        .modal-style {
            color: green;
        }

        .navheader {
            background-color: #004457;
            font-size: 13px;
        }

        .header .navbar {
            font-size: 13px;
        }

        .navbar ul li {
            padding-left: 15px;
        }

        .span-div p {
            margin: 0px;
            padding: 0px;
            line-height: 1;
        }

        .header__img img {
            align-items: center;
        }

        .banner-text {
            font-style: normal;
            font-weight: 500;
            font-size: 70px;
            color: #FFFFFF;
        }

        .banner-para-text {
            font-style: normal;
            font-weight: normal;
            color: #FFFFFF;
        }

        .banner-btn {
            width: 129px;
            height: 37px;
        }

        .card-text {
            color: green
        }

        .star i {
            color: yellow;
            align-items: right;
            float: right;
        }

        .services__section p {
            font-size: 13px;
        }

        .services__section {
            background-color: #004457;
            color: white;
        }

        .dark__card {
            background-color: #003A4A;
        }

        .waste__section {
            /* background-image: url('./images/waste_back.svg'); */
            background-position: top right;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .waste__img {
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .btn-services {
            margin-top: 100px;
        }

        .nav-drop {
            background-color: #52AE32;
        }

        .waste {
            float: right;
            text-transform: uppercase;
            color: white;
            border-radius: none;
        }

        html {
            height: 100%;
        }

        body {
            min-height: 100%;
            display: flex;
            flex-direction: column;
        }

        .footer {
            background-color: #004457;
            margin-top: auto;
        }

        .foot__con {
            margin-top: 50px;
        }

        .footer ul li {
            list-style: none;
            color: white;
        }

        .foot__con i {
            color: #52AE32
        }

        .latest__art {
            color: #52AE32
        }

        .bg-success-service {
            background-color: #52AE32;
        }

        .ul__class ul {
            float: right;
        }

        .ul__class ul li {
            padding-left: 20px;
        }

        .card__btn {
            float: right;
        }

        .btn-onoff {
            width: 80px;
            float: right;
            height: 23px;
            font-size: 10px;
            padding-top: 3px;
            background-color: #004457;
            color: white;
            border-radius: 30px;
        }

        .btn-ongoing {
            float: right;
            width: 80px;
            height: 23px;
            font-size: 10px;
            padding-top: 3px;
            background-color: #52AE32;
            color: white;
            border-radius: 30px;
        }

        .foot {
            height: 45px;
        }

        .card-footer p {
            font-size: 12px;
        }

        @media only screen and (max-width: 600px) {
            .header {
                height: 100vh;
                position: relative;
            }

            .head_row {
                top: 350px;
                position: relative;
            }

            .header__img img {
                display: none;
            }

            .span-div {
                display: none;
            }

            .navbar-brand img {
                height: 40px;
                width: 40px;
            }

            .banner-text {
                font-size: 60px;
            }
        }

        @media only screen and (max-width: 820px) {
            .header {
                height: 100vh;
                position: relative;
            }

            .head_row {
                top: 350px;
                position: relative;
            }

            /* .header__img img {
        display: none;
        } */
            .span-div {
                display: none;
            }

            .navbar-brand img {
                height: 40px;
                width: 40px;
            }

            .banner-text {
                font-size: 50px;
            }
        }

        @media only screen and (max-width: 768px) {
            .head_row {
                top: 90px;
                position: relative;
            }
        }

        @media only screen and (max-width: 540px) {
            .header {
                height: 100vh;
            }

            .head_row {
                top: 100px;
                position: relative;
            }

            .span-div {
                display: none;
            }

            .navbar-brand img {
                height: 40px;
                width: 40px;
            }

            .banner-text {
                font-size: 30px;
            }
        }

        @media only screen and (max-width: 280px) {
            .header {
                height: 120vh;
            }

            .head_row {
                top: 0;
                position: relative;
            }

            .span-div {
                display: none;
            }

            .navbar-brand img {
                height: 40px;
                width: 40px;
            }

            .banner-text {
                font-size: 30px;
            }
        }

        @media only screen and (max-width: 375px) {
            .head_row {
                top: 0;
                position: relative;
            }

            /* .header__img img {
                 display: none;
                  } */
            .span-div {
                display: none;
            }

            .navbar-brand img {
                height: 40px;
                width: 40px;
            }

            .banner-text {
                font-size: 30px;
            }

            .msg_spanForAddCompany {
                width: 100%;
            }

            .General-info {
                text-align: center;
            }
        }

        @media only screen and (min-width:992px) and (max-width:1199px) {
            .span-div {
                display: none;
            }

            .navbar ul li {
                padding-left: 5px;
            }
        }

        .username {
            background: #52AE32;
            border-radius: 30px 30px 30px 30px;
            margin-right: 1px;
            font-size: 15px;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            color: white;
        }

        .UserName {
            margin-right: 1px;
            font-size: 15px;
            padding: 5px;
            padding-left: 10px;
            padding-right: 10px;
            color: white;
        }

        .reg_para_final {
            font-size: 12px;
        }



        .trade2 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

    </style>
</head>

<body>
    {{-- @include('user.userLayouts.Navbar') --}}
    <div class="navheader mb-1">
        <div class="container ">
            {{-- navbar starts --}}
            <nav class="navbar navbar-expand-lg navbar-dark pt-4">
                <a class="navbar-brand d-flex" href="{{ URL('/') }}">
                    <img src="{{ url('public/assets/images/GRMLogoFinal2.png') }}" class="logo" alt="">
                    <div class="span-div ml-2">
                        <p>GLOBAL</p>
                        <p>RECYCLING</p>
                        <p>MARKET</p>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ URL('/') }}">Home <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Company
                            </a>
                            <div class="dropdown-menu nav-drop " aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-light" href="{{ URL('/About-Us') }}">About Us</a>
                                <a class="dropdown-item text-light" href="{{ URL('/Why-Use-GRM') }}">Why Use GRM</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link"
                                href="{{ URL('/Affliations&Memberships') }}">Affliations/Memberships</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ URL('/Industry-News') }}">News </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ URL('/Blog') }}">Blog </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Knowledge Center
                            </a>
                            <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item text-light" href="{{ URL('/Waste-RKC') }}">Waste Regulation
                                    Knowledge Center</a>
                                <a class="dropdown-item text-light" href="{{ URL('/Recycling-KC') }}">Recycling
                                    Knowledge
                                    Center</a>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ URL('/Contact-Us') }}">Contact </a>
                        </li>
                        @if (Auth::check())
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle f-s-14 nav-link">
                                    <i class="fa fa-bell"></i>
                                    <span>NOTIFICATIONS</span>
                                </a>
                                <div class="dropdown-menu media-list dropdown-menu-right">
                                    <div class="dropdown-header">ALL NOTIFICATIONS</div>

                                    @foreach (auth()->user()->notifications as $notification)
                                        <a href="javascript:;" class="dropdown-item media">
                                            <div class="media-left">
                                                <i class="fa fa-envelope media-object bg-silver-darker mr-3"></i>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="media-heading">
                                                    {{-- {{ $notification->data['comment'] }} --}}
                                                    Someone
                                                    has commented on your Tender
                                                    post
                                                </h6>
                                                <div class="text-muted f-s-10">2 hour ago</div>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </li>
                        @endif
                        @if (Auth::check())
                            @auth
                                <li class="nav-item dropdown">

                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <span class="border 1px username">Hi</span>
                                        <span class=" ">{{ Auth::user()->name }}
                                            {{ Auth::user()->lname }}</span>
                                    </a>
                                    <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                                        {{-- @foreach ($membership as $item) --}}
                                        @foreach ($membership as $item)
                                            @if ($item->industry != null)
                                                <a class="dropdown-item text-light"
                                                    href="{{ URL('/Industry-Profile') }}">My
                                                    Industry</a>
                                            @elseif(!Auth::user()->id || $item->type == null || $item->type == 'Buyer/Seller')
                                                <a class="dropdown-item text-light"
                                                    href="{{ URL('/Company-Profile') }}">My
                                                    Profile</a>
                                            @endif
                                        @endforeach
                                        <a class="dropdown-item text-light" href="{{ URL('/GeneralStore') }}">Listings
                                        </a>
                                        <a class="dropdown-item text-light" href="{{ URL('/RequestStore') }}">Requests
                                        </a>
                                        <a class="dropdown-item text-light" href="{{ URL('/TendersStore') }}">Tenders</a>
                                        <a class="dropdown-item text-light" href="{{ URL('/Services-Store') }}">Service
                                            Providers</a>
                                        <a class="dropdown-item text-light" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                        {{-- <a class="dropdown-item text-light" href="{{ URL('/Recycling-KC') }}">Recycling Knowledge
                                        Center</a> --}}
                                    </div>
                                    {{-- @endif --}}
                                </li>
                            @endauth
                        @else
                            <li class="nav-item ">
                                <a href="{{ route('login') }}" data-toggle="modal" data-target="#Login"
                                    class="btn btn-success px-3">Log in</a>
                            </li>
                        @endif

                    </ul>
                </div>
            </nav>
            {{-- navbarEnds --}}
        </div>
    </div>

    <div class="container-fluid trade2 p-5 mt-4 mb-4" id="jar">
        <div class="row">
            <div class="col-md-12">
                <h2 class="trade2">General Tender Store</h2>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row mx-auto ">
            <div class="col-md-12 col-lg-3 col-12">

                <section id="team" class="pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-body">
                                        <img src="{{ url('public/assets/images/tenders.jpg') }}" alt=""
                                            class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-md-12 col-lg-9 col-12">
                <section id="team" class="pb-5">
                    <div class="row">
                        <!-- Team member -->
                        <div class="col-md-12">
                            <div class="card-body border 1px">
                                <table id="myTable" class="table table-striped table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            {{-- <th width="">ID</th> --}}
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Opening date</th>
                                            <th>Closing date</th>
                                            <th>Location</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th style="width: 15%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($tender as $tenders)
                                            <tr class="odd gradeX">
                                                {{-- <td class="f-s-600 text-inverse">
                                                    {{ $tenders->id }}</td> --}}
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
                                </table>
                            </div>
                        </div>
                        <!-- ./Team member -->

                    </div>
                </section>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    @include('user.userLayouts.Footer')
</body>

</html>
