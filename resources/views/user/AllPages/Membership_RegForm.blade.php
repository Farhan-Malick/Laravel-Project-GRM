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
    <h2 class="text-center">Registration Form</h2>
    <div class="container">
        @if (Session::has('Membership'))
            <div class="container col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                {{ session('Membership') }}</div>
        @endif
    </div>
    <div class="container mt-2 mb-5 border 1px">

        <form action="{{ URL('/Memberships') }}" method="POST" enctype="multipart/form-data" name="sentMessage" id=""
            novalidate>
            @csrf
            {{-- COMPANY INFORMATION SECTION --}}

            <div class="row mt-1">
                <div class="col-12">
                    <h4 class="pt-2">Company Information</h4>
                    <hr class="bg-success ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 ">

                    <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the
                        industry's standard dummy text ever since.
                    </p>
                </div>
                <div class="col-md-7 ">
                    <div class="form-row ">
                        <div class="form-group  col-md-6">
                            <label class="reg_para" for="">Company Name *</label>
                            <input type="text"
                                class="  @error('company_name') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="company_name" value="{{ old('company_name') }}" require
                                placeholder="Enter company Name" required>
                            @error('company_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-6  ">
                            <label class="reg_para" for="">Company Scope *</label>
                            <input type="text"
                                class="@error('company_scope') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="company_scope" value="{{ old('company_scope') }}" require placeholder=" Enter
                                Company Scope" required>
                            @error('company_scope')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-12  ">
                            <label class="reg_para" for="">Address *</label>
                            <input type="text" value="{{ old('address') }}"
                                class="
                                
                                @error('address') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="address" require placeholder="Enter Address" required>
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-4 ">
                            <label class="reg_para" for="">Country *</label>
                            <input type="text" value="{{ old('country') }}"
                                class="
                                
                                @error('country') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="country" require placeholder="Enter Country" required>
                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group   col-md-4  ">
                            <label class="reg_para" for="">City *</label>
                            <input type="text" value="{{ old('city') }}"
                                class="
                                
                                @error('city') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="city" require placeholder="Enter City" required>
                            @error('city')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group   col-md-4  ">
                            <label class="reg_para" for="">Zip Code *</label>
                            <input type="num" value="{{ old('zip_code') }}"
                                class="
                                
                                @error('zip_code') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="zip_code" require placeholder="Enter Zip-Code" required>
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-12  ">
                            <label class="reg_para" for="">Company Email *</label>
                            <input type="email" value="{{ old('company_email') }}"
                                class="
                                
                                @error('company_email') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="company_email" require placeholder="Enter Email Address" required>
                            @error('zip_code')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-12  ">
                            <label class="reg_para" for="">Company Website *</label>
                            <input type="text" value="{{ old('company_website') }}"
                                class="
                                
                                @error('company_website') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="company_website" require placeholder="Enter Company's Website" required>
                            @error('company_website')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-12">
                    <h4 class="pt-2">Industry</h4>
                    <hr class="bg-success ">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p class="reg_para">
                        <b> Select at-least one. (Industries or Type)</b> <br> By selecting the <b>Industry</b>, you can
                        publish your
                        services on
                        this
                        website
                        so the recycling industry
                        users can easily access the information. <br>
                        By Selecting <b>"Type"</b>.You can Proceed As a Seller/Buyer.
                    </p>
                </div>
                <div class="col-md-7">
                    <div class="form-row">
                        <div class="form-group   col-md-6  ">
                            <label class="reg_para" for="">Select From here :</label>
                            <select name="m_type" id="Select_at_least_one" value="{{ old('m_type') }}"
                                class=" form-control @error('m_type') is-invalid @enderror reg_para ">
                                <option value="">--</option>
                                <option value="1">Service Providers</option>
                                <option value="2">Buyer/Seller</option>
                            </select>
                            @error('m_type')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <script>
                        function DropEvents() {
                            var Lists = document.getElementById('Select_at_least_one');
                            Lists.addEventListener('change', DisableMenu, false);
                        }

                        function DisableMenu() {
                            var Lists = document.getElementsByClassName('Drop');
                            for (var i = 0; i < Lists.length; i++) {
                                if (Lists[i].id !== event.target.value) {
                                    Lists[i].disabled = true;
                                } else {
                                    Lists[i].disabled = false;
                                }
                            }
                        }
                        window.onload = DropEvents;
                    </script>
                    <div class="form-row ">
                        <div class="form-group   col-md-6  ">
                            <label class="reg_para" for="">Service Providers : <small>(Optional)</small></label>
                            <select name="industry" id="1" disabled value="{{ old('industry') }}"
                                class="form-control @error('industry') is-invalid @enderror reg_para Drop">
                                <option value="">--</option>
                                <option>Inspection Services Provider</option>
                                <option>Bank</option>
                                <option>Shipping Line </option>
                                <option>Road Haulage</option>
                                <option>Freight Forwarders</option>
                                <option>Recycling Machinery Supplier </option>
                                <option>Recycling Machinery Maintenance Service Provider</option>
                                <option>indenting Partner</option>
                                <option>EA Documentation Management Company</option>
                                <option>Recruitment Agency </option>
                                <option>Waste Management Service Provider</option>
                                <option>Recycling Industry Consumables Suppliers</option>
                            </select>
                            @error('industry')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group   col-md-6  ">
                            <label class="reg_para" for="">Buyer/Seller : <small>(Optional)</small></label>
                            <select name="type" id="2" disabled value="{{ old('type') }}"
                                class="form-control @error('type') is-invalid @enderror reg_para Drop">
                                <option value="">--</option>
                                <option>Buyer/Seller</option>
                            </select>
                            @error('type')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>



            </div>
            {{-- Profile Information --}}
            <h4>Profile Information</h4>
            <hr class="bg-success">
            <div class=" row">
                <div class="col-md-5 ">
                    <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the
                        industry's standard dummy text ever since.</p>
                </div>
                <div class="col-md-7 ">
                    <div class="form-row ">
                        <div class="form-group  col-md-6">
                            <label class="reg_para" for="">First Name *</label>
                            <input type="text" value="{{ old('firstname') }}"
                                class="@error('firstname') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="firstname" require placeholder="Enter First Name" required>
                            @error('firstname')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-6  ">
                            <label class="reg_para" for="">Last Scope *</label>
                            <input type="text" value="{{ old('last_scope') }}"
                                class="@error('last_scope') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="last_scope" require placeholder="Enter Last Scope" required>
                            @error('last_scope')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-6">
                            <label class="reg_para" for="">Phone *</label>
                            <input type="tel" value="{{ old('phone') }}"
                                class="@error('phone') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="phone" require placeholder="Enter Phone Number" required>
                            @error('phone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-6 ">
                            <label name="gender">{{ __('Gender') }}</label>
                            <select name="gender" value="{{ old('gender') }}"
                                class="@error('gender') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                            @error('gender')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="reg_para" for="exampleInputFile">Picture *
                                <small><b>JFIF,PNG,SVG,JPG,JPEG
                                        Only</b></small></label>
                            <div class="input-group">
                                <div class="pr-2" style="float: left">
                                    <label for="fimg"><i class="bi bi-folder-plus"></i></label>
                                    <input value="{{ old('image') }}" class="@error('image') is-invalid @enderror "
                                        type="file" name="image" id="fimg" style="display:none; visibility:none;"
                                        onchange="img(this.value);">
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                <div class="text-center text-dark" id="display">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->get('image') as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach

                                            </ul>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Company Documents --}}
            <h4>Company Documents</h4>
            <hr class="bg-success">
            <div class=" row">
                <div class="col-md-5 ">
                    <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the
                        industry's standard dummy text ever since.</p>
                </div>
                <div class="col-md-7 ">
                    <div class="form-group">
                        <label class="reg_para" for="exampleInputFile">Company Documents
                            * <small><b>CSV,TXT,XLX,XLS,PDF Only</b></small></label>
                        <div class="input-group">
                            <div class="pr-2" style="float: left">
                                <label for="simage"><i class="bi bi-folder-plus"></i></label>
                                <input value="{{ old('company_document') }}"
                                    class="@error('company_document') is-invalid @enderror " type="file"
                                    name="company_document" id="simage" style="display:none; visibility:none;"
                                    onchange="doc(this.value);">
                            </div>
                            @error('company_document')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="text-center text-dark" id="displayDocs">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if (count($errors) > 0)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->get('company_document') as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <script>
                function img(imagename) {
                    var newimg = imagename.replace(/^.*\\/, "");
                    $('#display').html(newimg);
                }

                function doc(imagename1) {
                    var newimg = imagename1.replace(/^.*\\/, "");
                    $('#displayDocs').html(newimg);
                }
            </script>
            {{-- Payment Method --}}
            <h4>Payment Method</h4>
            <hr class="bg-success">
            <div class=" row">
                <div class="col-md-5 ">
                    <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting
                        industry.
                        Lorem Ipsum has been the
                        industry's standard dummy text ever since.</p>
                </div>
                <div class="col-md-7 ">
                    <div class="form-row ">
                        <div class="form-group  col-md-12">
                            <label for="name">Accepted Cards</label>
                            <div class="icon-container">
                                <i class="fa fa-cc-visa" style="color:navy; font-size:30px"></i>
                                <i class="fa fa-cc-amex" style="color:blue;font-size:30px"></i>
                                <i class="fa fa-cc-mastercard" style="color:red;font-size:30px"></i>
                                <i class="fa fa-cc-discover" style="color:orange;font-size:30px"></i>
                            </div>
                            {{-- <label class="reg_para" for="">Payment Method *</label>
                        <input type="text" class="@error('email') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                            name="p_method" require placeholder="Enter Payment Method" required> --}}
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-12">
                            <label class="reg_para" for="">Name On Card *</label>
                            <input value="{{ old('name_on_card') }}" type="tel"
                                class="@error('name_on_card') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="name_on_card" require placeholder="Enter Name On Card" required>
                            @error('name_on_card')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-12">
                            <label class="reg_para" for="">Card No *</label>
                            <input value="{{ old('card_no') }}" type="tel"
                                class="@error('card_no') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="card_no" require placeholder="Enter Card Number" required>
                            @error('card_no')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-6">
                            <label class="reg_para" for="">Expiration (MM/YY) *</label>
                            <input type="text" value="{{ old('expiration') }}"
                                class="@error('expiration') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                name="expiration" require placeholder="Enter Expiration  (00/00)" required>
                            @error('expiration')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-6  ">
                            <label class="reg_para" for="">CVV Code *</label>
                            <input type="tel" value="{{ old('cvv') }}"
                                class="@error('cvv') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                name="cvv" require placeholder="Enter CVV Code" required>
                            @error('cvv')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- TEARMS AND CONDITIONS --}}
            <div class="row">
                <div class="form-check col-md-12 m-2">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label reg_para" for="flexCheckDefault">
                        I accept the Terms & Conditions and Privacy Policy by joining global recycling market.
                    </label>
                </div>
            </div>
            {{-- BUTTONS --}}
            <div class="row">
                <div class="form-check col-md-12 m-2">
                    <button type="submit" class="btn btn-primary btn-sub">Submit</button>
                    <a href="{{ URL('Memberships') }}" class="btn  btn-cen">Cancel</a>
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
