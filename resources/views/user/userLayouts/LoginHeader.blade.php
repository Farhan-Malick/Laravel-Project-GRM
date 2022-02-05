@foreach ($header as $headers)
    <div class="header mb-3" style="background-image: url('{{ asset('storage/app/public/post/home/background/' . $headers->image) }}');
        background-position: center center;
        background-repeat: no-repeat;
        background-size: cover;

        ">
@endforeach
<div class="container ">
    {{-- navbar starts --}}
    <nav class="navbar navbar-expand-lg navbar-dark pt-4">
        <a class="navbar-brand d-flex" href="{{ URL('/') }}">
            <img src="assets/images/GRMLogoFinal2.png" class="logo" alt="">
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
                    <a class="nav-link" href="{{ URL('/Affliations&Memberships') }}">Affliations
                        Memberships</a>
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
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-expanded="false">
                        <span class="border 1px  username">NR</span>
                        <span>Nabeel Rana</span>
                        <span>cdoxs</span>
                    </a>
                    <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item text-light" href="{{ URL('/Company-Profile') }}">My Profile</a>
                        {{-- <a class="dropdown-item text-light" href="{{ URL('/Recycling-KC') }}">Recycling Knowledge
                                Center</a> --}}
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    {{-- navbarEnds --}}
</div>
<hr style="border: 1px solid rgba(255, 255, 255, 0.25);">
@foreach ($header as $headers)
    <div class="container container1 Banner_ImgTxt">
        <div class="row head_row text-light  ">
            <div class="col-md-6 div1">
                <div class="col-md-12 d-flex ">
                    <h1 class=" banner-text ">
                        {{ $headers->heading }}</h1>
                </div>
                <br>
                <div class="col-md-12">
                    <p class="banner-para-text ">{{ $headers->title }}</p>
                    <a class="btn btn-success banner-btn px-3" href="" type="button" data-toggle="modal"
                        data-target="#register">Join GRM</a>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="header__img banner-img ">
                    <img src="{{ asset('storage/app/public/post/home/BannerImage/' . $headers->image2) }}"
                        height="400px" width="400px" class="head-2 img-fluid " alt="">
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
<!-- LOGIN MODAL -->
<div class="modal fade" id="Login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <h5 class="modal-title">Login</h5>
                </div>
                <div class="col-1 ms-3">
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
                        <a href="" type="submit" name="insert" id="insert" value="Login Here"
                            class="btn btn-success btn-contact  w-100"></a>
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
{{-- Login modal ends here --}}
{{-- Register Modal --}}
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <img src="assets/images/register.svg" alt="" class="img-fluid">
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
                            value="Register Here" class="btn btn-success btn-contact  w-100">Register Here</a>
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
{{-- Register MOdal Ends Here --}}
