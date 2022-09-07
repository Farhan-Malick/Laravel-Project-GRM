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

    {{-- @include('user.userLayouts.ProfileHeader') --}}
    <div class="container border 1px reg_para">
        <div class="row pb-1">
            <div class="col-md-5">
                <div class="">
                    <img src="{{ url('public/assets/images/PROFILE2.jpg') }}" class="img_div_pro " alt="">
                    <h5 class="name_padding m-0">{{ Auth::user()->name }} {{ Auth::user()->lname }} <a href="#"
                            type="submit" class="pre btn btn-success">PREMIUM</a>
                    </h5>
                    <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan</p>
                </div>
            </div>
            <div class="col-md-7 mb-2 border-left 1px pt-3">
                <h6 class="p-0 m-0">Business Type</h6>
                <span class="reg_para p-0 m-0 text-secondary">Seller</span>
                @if ($companyData)
                    <a href="{{ URL('Edit-Company-Data/' . $companyData->id) }}" type="submit"
                        class="btn btn-success msg_span ml-1 text-white reg_para"><i class="bi bi-pencil mr-2 "></i>
                        Edit Profile</a>
                @else
                    <a href="#" type="submit" class="btn btn-success msg_span ml-1 text-white reg_para"><i
                            class="bi bi-pencil mr-2 "></i>
                        Edit Profile</a>
                @endif


                <a href="" type="submit" class="btn btn-secondary msg_span2 reg_para text-white">
                    <i class="bi bi-chat mr-2"></i>Message</a>

                <h6 class="p-0 m-0">Status</h6>
                <span class="reg_para p-0 m-0 text-secondary">Active</span>
            </div>
            <div class="navheader w-100  text-center">
                <div class="container ">
                    {{-- navbar starts --}}
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand d-flex" href="{{ URL('/') }}">
                            {{-- <img src="public/assets/images/GRMLogoFinal2.png" class="logo" alt=""> --}}
                            <div class=" ml-2">
                                <h6 class="pt-2 text-white">GLOBAL RECYCLING MARKETING</h6>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent2">
                            <ul class="navbar-nav">
                                <li class="nav-item active ">
                                    <a class="nav-link" href="{{ URL('Company-Profile') }}"><i
                                            class="bi bi-building mr-2"></i>Company
                                        Profile
                                        <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Offers') }}"><i
                                            class="bi bi-hand-thumbs-up mr-2"></i>Offers
                                        <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Request') }}"><i
                                            class="bi bi-arrow-down-left-square mr-2"></i>Request <span
                                            class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Docs') }}"><i
                                            class="bi bi-file-earmark-plus mr-2"></i>Documents
                                        <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Media') }}"><i
                                            class="bi bi-aspect-ratio mr-2"></i>Portfolio
                                        <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Tenders-List') }}"><i
                                            class="bi bi-file-earmark-spreadsheet-fill mr-2"></i>Tenders <span
                                            class="sr-only"></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    {{-- navbarEnds --}}
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        @if (Session::has('Membership'))
            <div class="container col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                {{ session('Membership') }}</div>
        @endif
    </div>
    <div class="container mt-3">
        @if (Session::has('Company'))
            <div class="container col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                {{ session('Company') }}</div>
        @endif
    </div>
    <div class="container">
        @if (!$companyData)
            <div class="row">
                <div class="col-md-12 text-right">
                    <a href="{{ url('/Add_Company_Data ') }}" type="submit"
                        class="btn btn-success pb-0 pb-2 mt-1 reg_para mb-2 " style="float: right">Add
                        Company
                        Data</a>
                </div>
            </div>
        @endif
        <div class="row ">
            @if ($companyData)
                <div class="col-md-3">
                    <div class="container-fluid m-0 p-0 mt-3 mb-3">
                        @if (!$companyData)
                            <div class="row">
                                <div class="col-md-12 border 1px">
                                    <h5 class="pb-0 pt-3">Company Logo</h5>
                                    <hr class="bg-success pt-0">
                                    <div class="text-center">
                                        <img src="{{ URL('public/assets/images/c_log.svg') }}" alt=""
                                            class="img-fluid">
                                        <div class="form-group">
                                            <div class="mt-3">
                                                <div class=" custom-file">
                                                    <input type="file" name="image" class="custom-file-input"
                                                        id="exampleInputFile">
                                                    <label
                                                        class="custom-file-label   livetablerow  mx-0 px-0 text-center"
                                                        for="exampleInputFile">Add a Company Logo</b></label>
                                                    <label><b>
                                                            <h4><i class="fa fa-user-o" aria-hidden="true"></i> :
                                                                {{ Auth::user()->name }}
                                                                {{ Auth::user()->lname }}</h4>

                                                        </b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="row">
                                <div class="col-md-12 border 1px">
                                    <h5 class="pb-0 pt-3">Company Logo</h5>
                                    <hr class="bg-success pt-0">
                                    <div class="text-center">
                                        <img src="{{ asset('storage/app/public/post/Memberships/' . $companyData->image) }}"
                                            alt="" class="" height="300px" width="100%">
                                        <div class="form-group">
                                            <div class="mt-3">
                                                <div class=" custom-file">
                                                    <label><b>
                                                            Company Email
                                                            <h6>{{ $companyData->company_email }} </h6>

                                                        </b></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="container-fluid m-0 p-0  mb-5">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Addresses</h5>
                                <hr class="bg-success pt-0">

                                <span class="text-secondary reg_para">Office Address</span>
                                <p class="reg_para">{{ $companyData->address }}
                                </p>
                                <span class="text-secondary reg_para">Warehouse Address</span>
                                <p class="reg_para">{{ $companyData->warehouse }}
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid m-0 p-0  mb-5">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Business Certificates</h5>
                                <hr class="bg-success pt-0">
                                <div class="row">
                                    <div class="col-12">
                                        <img src="{{ URL('public/assets/images/pdf.svg') }}" class="pb-2"
                                            height="50px" width="50px" alt="">
                                        <span class="reg_para_final">{{ $companyData->file }}</span>
                                        <a href="" type="submit" class="btn btn-secondary msg_span4 step text-white">
                                            <i class="bi bi-download step"></i></a>
                                    </div>
                                </div>
                                <hr>

                            </div>
                        </div>
                    </div>

                    <div class="container-fluid m-0 p-0  mb-5">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Ratings</h5>
                                <hr class="bg-success pt-0">
                                <div class="rating">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                </div><span class="ml-2">10 Reviews</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">

                    <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <div class="row">
                                    <div class="bg- col-md-12">
                                        <h5 class="pb-0 pt-3 General-info">General Information</h5>
                                    </div>
                                </div>

                                <hr class="bg-success pt-0">
                                <div class="form-row ">
                                    <div class="form-group  col-md-12">
                                        <label class="reg_para" for=""><b> Name *</b></label>
                                        <input disabled type="text" value="{{ $companyData->name }}"
                                            class="bg-transparent form-control   reg_para input-group input--style-2 input-contact"
                                            name="cname" require placeholder="Enter company Name" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for=""><b> Company Email *</b></label>
                                        <input disabled type="email" value="{{ $companyData->company_email }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="email" require placeholder="Enter Email Address" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for=""><b> Phone *</b></label>
                                        <input disabled type="tel" value="{{ $companyData->phone }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="cphone" require placeholder="Enter Phone Number" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for=""><b> Company Website *</b></label>
                                        <input disabled type="text" value=" {{ $companyData->company_website }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="company_website" require placeholder="Enter Company's Website"
                                            required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for=""><b> Description *</b></label>
                                        <input disabled type="text" value="{{ $companyData->description }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="Description" require placeholder="Enter Company Description "
                                            required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-12  ">
                                        <label class="reg_para" for=""><b> Company Founding Year *</b></label>
                                        <input disabled type="text" value="{{ $companyData->companyfy }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="" require placeholder="Enter Company Description " required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Registration Details</h5>
                                <hr class="bg-success pt-0">
                                <div class="form-row ">
                                    <div class="form-group  col-md-6">
                                        <label class="reg_para" for=""><b> VAT ID *</b></label>
                                        <input disabled type="text" value="{{ $companyData->vat_id }}"
                                            class="bg-transparent form-control  reg_para input-group input--style-2 input-contact"
                                            name="vat_id" require placeholder="Enter VAT ID" required>
                                    </div>
                                    <div class="form-group  col-md-6  ">
                                        <label class="reg_para" for=""><b> Tax Id *</b></label>
                                        <input disabled type="text" value="{{ $companyData->tax_id }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="tax_id" require placeholder="Enter Tax Id" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-6">
                                        <label class="reg_para" for=""><b> Registration ID *</b></label>
                                        <input disabled type="text" value="{{ $companyData->reg_id }}"
                                            class="bg-transparent form-control  reg_para input-group input--style-2 input-contact"
                                            name="registration_id" require placeholder="Enter Registration ID" required>
                                    </div>
                                    <div class="form-group  col-md-6  ">
                                        <label class="reg_para" for=""><b> Court *</b></label>
                                        <input disabled type="text" value="{{ $companyData->court }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="reg_court" require placeholder="Enter Court" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Social</h5>
                                <hr class="bg-success pt-0">
                                <div class="form-row ">
                                    <div class="form-group  col-md-6">
                                        <label class="reg_para" for=""><b> LinkedIn *</b></label>
                                        <input disabled type="text" value="{{ $companyData->linkedin }}"
                                            class="bg-transparent form-control  reg_para input-group input--style-2 input-contact"
                                            name="Linkedin" require placeholder="Enter LinkedIn link " required>
                                    </div>
                                    <div class="form-group  col-md-6  ">
                                        <label class="reg_para" for=""><b> Facebook *</b></label>
                                        <input disabled type="text" value="{{ $companyData->facebook }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="fb" require placeholder="Enter Facebook link" required>
                                    </div>
                                </div>
                                <div class="form-row ">
                                    <div class="form-group  col-md-6">
                                        <label class="reg_para" for=""><b> Twitter *</b></label>
                                        <input disabled type="text" value="{{ $companyData->twitter }}"
                                            class="bg-transparent form-control  reg_para input-group input--style-2 input-contact"
                                            name="twitter" require placeholder="Enter Twitter link" required>
                                    </div>
                                    <div class="form-group  col-md-6  ">
                                        <label class="reg_para" for=""><b> Instagram *</b></label>
                                        <input disabled type="text" value="{{ $companyData->insta }}"
                                            class="bg-transparent form-control reg_para input-group input--style-2 input-contact"
                                            name="insta" require placeholder="Enter Instagram link" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid ml-2 pr-2    p-0 mt-3 mb-3">
                        <div class="row">
                            <div class="col-md-12 border 1px">
                                <h5 class="pb-0 pt-3">Comments</h5>
                                <hr class="bg-success pt-0">
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{ URL('public/assets/images/cmnt.svg') }}" alt=""
                                                    class="img_fluid img_div_VP mr-2">
                                                <p class="pt-2 "><b>Maude Hall</b> <span
                                                        class="text-secondary"><small>14
                                                            min</small></span></p>
                                                <p>That's a fantastic new app feature. You and your team did an
                                                    excellent
                                                    job of incorporating user testing feedback.</p>
                                                <span class="text-secondary">2 Likes</span> <i
                                                    class="bi bi-arrow-return-right ml-1 "></i>
                                                <span class="text-secondary">Reply</span><i
                                                    class="bi bi-hand-thumbs-up step mr-3"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{ URL('public/assets/images/cmnt.svg') }}" alt=""
                                                    class="img_fluid img_div_VP mr-2">
                                                <p class="pt-2 "><b>Maude Hall</b> <span
                                                        class="text-secondary"><small>14
                                                            min</small></span></p>
                                                <p>That's a fantastic new app feature. You and your team did an
                                                    excellent
                                                    job of incorporating user testing feedback.</p>
                                                <span class="text-secondary">2 Likes</span> <i
                                                    class="bi bi-arrow-return-right ml-1 "></i>
                                                <span class="text-secondary">Reply</span><i
                                                    class="bi bi-hand-thumbs-up step mr-3"></i>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-12">
                                                <img src="{{ URL('public/assets/images/cmnt.svg') }}" alt=""
                                                    class="img_fluid img_div_VP mr-2">
                                                <p class="pt-2 "><b>Maude Hall</b> <span
                                                        class="text-secondary"><small>14
                                                            min</small></span></p>
                                                <p>That's a fantastic new app feature. You and your team did an
                                                    excellent
                                                    job of incorporating user testing feedback.</p>
                                                <span class="text-secondary">2 Likes</span> <i
                                                    class="bi bi-arrow-return-right ml-1 "></i>
                                                <span class="text-secondary">Reply</span><i
                                                    class="bi bi-hand-thumbs-up step mr-3"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
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
