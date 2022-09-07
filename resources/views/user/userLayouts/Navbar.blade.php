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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                NOTIFICATIONS <span class="badge ml-1 border 1px"
                                    style="font-size: 12px; border-radius:20px">{{ count(auth()->user()->unreadNotifications) }}</span>
                            </a>
                            <div class="dropdown-menu nav-drop" aria-labelledby="navbarDropdown">
                                <div class="dropdown-header text-light " style="font-size: 14px">ALL NOTIFICATIONS</div>
                                @foreach (auth()->user()->unreadNotifications as $notification)
                                    <h6><a class="text-light " style="text-decoration: none; font-size:10px "
                                            href="#">
                                            <p class="pl-2"><i
                                                    class="fa fa-envelope media-object bg-silver-darker mr-3"></i>You
                                                have
                                                commented on a post</p>
                                        </a>
                                    </h6>
                                @endforeach
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
                                            <a class="dropdown-item text-light" href="{{ URL('/Industry-Profile') }}">My
                                                Industry</a>
                                        @elseif(!Auth::user()->id || $item->type == null || $item->type == 'Buyer/Seller')
                                            <a class="dropdown-item text-light" href="{{ URL('/Company-Profile') }}">My
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
<!-- LOGIN MODAL -->
<div class="modal fade" id="Login" {{ session(['name' => 'data']) }} tabindex="-1" role="dialog"
    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
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
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="control-group form-group m-2 ">
                        <div class="">

                            <input
                                class="input--style-1 input-group
                                 input-group input-contact @error('email') is-invalid @enderror"
                                type="email" id="email" placeholder="Enter Your Email Address" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group form-group m-2 ">
                        <div class="">

                            <input
                                class="input--style-1 input-group
                              input-group input-contact @error('password') is-invalid @enderror"
                                type="password" id="password" placeholder="Enter Your Password" name="password"
                                value="{{ old('password') }}" required autocomplete="password" autofocus>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-check m-2 ">
                        <input class="form-check-input" id="checkbox-id" type="checkbox" value=""
                            id="flexCheckDefault" />
                        <label class="form-check-label text-right" for="flexCheckDefault">Remember password</label>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-100">
                                {{ __('Login Here') }}
                            </button>
                        </div>
                    </div>
                    <div class=" form-group m-2">
                        <span class="reg_para"> Don' t have GRM account ?</span> <a href="" type="button"
                            id="anchor" data-toggle="modal" data-target="#register" class="text-success">Sign-up</a>
                        {{-- <p><a href="" class="text-success">Forget password ?</a></p> --}}
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
                    <img src="public/assets/images/register.svg" alt="" class="img-fluid">
                </div>
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body px-4">
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row mb-3">

                        <div class="col-md-6">
                            <input id="name" type="text"
                                class="input--style-1  input-group input-contact @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" placeholder="Enter Your First Name" required
                                autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input id="lname" type="text"
                                class="input--style-1  input-group input-contact @error('lname') is-invalid @enderror"
                                name="lname" value="{{ old('lname') }}" placeholder="Enter Your Last Name" required
                                autocomplete="lname" autofocus>

                            @error('lname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="cname" type="text"
                                class="input--style-1  input-group input-contact @error('cname') is-invalid @enderror"
                                name="cname" value="{{ old('cname') }}" placeholder="Enter Your Company Name"
                                required autocomplete="cname" autofocus>

                            @error('cname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input id="email" type="email"
                                class="input--style-1  input-group input-contact @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required
                                autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <input id="password" type="password"
                                class="input--style-1  input-group input-contact @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password" placeholder="Enter Password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <input id="password-confirm" type="password"
                                class="input--style-1  input-group input-contact" placeholder="Re-Enter Password"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="row mb-0">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-success w-100">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                    <div class="form-row col-12 mt-3 ml-4 text-center">
                        <p class="reg-modal">By joining GRM you agree to GRM <u>Terms and Conditions of
                                Use.</u><br>
                            {{-- Already have Scrapo account? <a href="" type="button" data-toggle="modal"
                                data-target="#Login" class="text-success"> Log-in </a> --}}
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="alreadyregister" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="col-1"></div>
                <div class="col-10 text-center">
                    <img src="public/assets/images/register.svg" alt="" class="img-fluid">
                </div>
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body px-4">
                <form>
                    @csrf

                    <div class="row mb-3">

                        <div class="col-md-12">
                            <h5 class=" text-center">You Are Already Registered</h5>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
{{-- Register MOdal Ends Here --}}
<script>
    @error('email')
        $('#Login').modal('show');
    @enderror
</script>
