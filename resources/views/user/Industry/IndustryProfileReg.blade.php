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

                <a href="#" type="submit" class="btn btn-success msg_span ml-1 text-white reg_para"><i
                        class="bi bi-pencil mr-2 "></i>
                    Edit Profile</a>



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
                                    <a class="nav-link" href="{{ URL('Industry-Profile') }}"><i
                                            class="bi bi-building mr-2"></i>Industry
                                        Profile
                                        <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ URL('industry-Services-List') }}"><i
                                            class="bi bi-hand-thumbs-up mr-2"></i>Services
                                        <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{ URL('Industry-Portfolio') }}"><i
                                            class="bi bi-hand-thumbs-up mr-2"></i>Portfolio
                                        <span class="sr-only"></span></a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                    {{-- navbarEnds --}}
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-3  border 1px">
        <form action="{{ URL('/Add_Industry_Detail') }}" method="POST" enctype="multipart/form-data"
            class="reg_para">
            @csrf
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <h5 class="pb-0 pt-3">General Information</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-12">
                                    <label class="reg_para" for="">Name *</label>
                                    <input type="text"
                                        class="@error('name') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="name" require placeholder="Enter company Name">
                                    @error('name')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Industry Email *</label>
                                    <input type="email"
                                        class="@error('company_email') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="company_email" require placeholder="Enter Email Address">
                                    @error('company_email')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Phone *</label>
                                    <input type="tel"
                                        class="@error('phone') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="phone" require placeholder="Enter Phone Number">
                                    @error('phone')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Industry Website *</label>
                                    <input type="text"
                                        class="@error('company_website') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="company_website" require placeholder="Enter Company's Website">
                                    @error('company_website')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Description *</label>
                                    <input type="text"
                                        class="@error('description') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="description" require placeholder="Enter Company Description ">
                                    @error('description')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Industry Founding Year *</label>
                                    <input type="text"
                                        class="@error('companyfy') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="companyfy" require placeholder="Enter Company Founding Year">
                                    @error('companyfy')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12">
                                    <label class="reg_para" for="">Address *</label>
                                    <textarea type="text" name="address" id="" cols="30" rows="1"
                                        class="@error('address') is-invalid @enderror form-control reg_para input-group input--style-1  input-contact"
                                        placeholder="Enter Company Address "></textarea>
                                    @error('address')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12">
                                    <label class="reg_para" for="">Warehouse Address *</label>
                                    <textarea type="text" name="warehouse" id="" cols="30" rows="1"
                                        class="@error('warehouse') is-invalid @enderror form-control reg_para input-group input--style-1  input-contact"
                                        placeholder="Enter Warehouse Address "></textarea>
                                    @error('warehouse')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <h5 class="pb-0 pt-3">Registration Details</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">VAT ID *</label>
                                    <input type="tel"
                                        class="@error('vat_id') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="vat_id" require placeholder="Enter VAT ID">
                                    @error('vat_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Tax Id *</label>
                                    <input type="tel"
                                        class="@error('tax_id') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="tax_id" require placeholder="Enter Tax Id">
                                    @error('tax_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">Registration ID *</label>
                                    <input type="tel"
                                        class="@error('reg_id') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="reg_id" require placeholder="Enter Registration ID">
                                    @error('reg_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Court *</label>
                                    <input type="text"
                                        class="@error('court') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="court" require placeholder="Enter Court">
                                    @error('court')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <h5 class="pb-0 pt-3">Social</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">LinkedIn *</label>
                                    <input type="text"
                                        class="@error('linkedin') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="linkedin" require placeholder="Enter LinkedIn link ">
                                    @error('linkedin')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Facebook *</label>
                                    <input type="text"
                                        class="@error('facebook') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="facebook" require placeholder="Enter Facebook link">
                                    @error('facebook')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-6">
                                    <label class="reg_para" for="">Twitter *</label>
                                    <input type="text"
                                        class="@error('twitter') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="twitter" require placeholder="Enter Twitter link">
                                    @error('twitter')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Instagram *</label>
                                    <input type="text"
                                        class="@error('insta') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="insta" require placeholder="Enter Instagram link">
                                    @error('insta')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-group step">
                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input "
                                            id="exampleInputFile">
                                        <label class="custom-file-label  reg_para input-contact"
                                            for="exampleInputFile">Upload Industry Logo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="input-group step">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input "
                                            id="exampleInputFile1" required>
                                        <label class="custom-file-label  reg_para input-contact"
                                            for="exampleInputFile1">Choose
                                            file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-right">
                                <input type="submit" class="btn btn-success mt-4  mb-4 reg_para" style="width: 30%"
                                    value="Upload">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
