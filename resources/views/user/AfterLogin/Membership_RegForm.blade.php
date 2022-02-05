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
    <div class="container mt-5 border 1px">
        {{-- COMPANY INFORMATION SECTION --}}
        <div class="row mt-1">
            <div class="col-12">
                <h4>Company Information</h4>
                <hr class="bg-success ">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 ">
                <form action="" method="" id="">
                    <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the
                        industry's standard dummy text ever since.
                    </p>
            </div>
            <div class="col-md-7 ">
                <div class="form-row ">
                    <div class="form-group  col-md-6">
                        <label class="reg_para" for="">Company Name *</label>
                        <input type="text" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="company_name" require placeholder="Enter company Name" required>
                    </div>
                    <div class="form-group  col-md-6  ">
                        <label class="reg_para" for="">Company Scope *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="company_scope" require placeholder="Enter Company Scope" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-12  ">
                        <label class="reg_para" for="">Address *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="address" require placeholder="Enter Address" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-4  ">
                        <label class="reg_para" for="">Country *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="gender" require placeholder="Enter Country" required>
                    </div>
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">City *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="city" require placeholder="Enter City" required>
                    </div>
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">Zip Code *</label>
                        <input type="num" class="form-control reg_para input-group input--style-1 input-contact"
                            name="zip_code" require placeholder="Enter Zip-Code" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-12  ">
                        <label class="reg_para" for="">Company Email *</label>
                        <input type="email" class="form-control reg_para input-group input--style-1 input-contact"
                            name="email" require placeholder="Enter Email Address" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-12  ">
                        <label class="reg_para" for="">Company Website *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="company_website" require placeholder="Enter Company's Website" required>
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
                        <input type="text" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="fname" require placeholder="Enter First Name" required>
                    </div>
                    <div class="form-group  col-md-6  ">
                        <label class="reg_para" for="">Last Scope *</label>
                        <input type="text" class="form-control reg_para input-group input--style-1 input-contact"
                            name="lname" require placeholder="Enter Last Scope" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-6">
                        <label class="reg_para" for="">Phone *</label>
                        <input type="tel" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="phoneNo" require placeholder="Enter Phone Number" required>
                    </div>
                    <div class="form-group  col-md-6 ">
                        <label name="gender">{{ __('Gender') }}</label>
                        <select name="gender" class="form-control reg_para input-group input--style-1 input-contact">
                            <option>Male</option>
                            <option>Female</option>
                        </select>
                        @error('gender')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="reg_para" for="exampleInputFile">Picture *</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label  reg_para   input-contact" for="exampleInputFile">Choose
                                file</label>
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
                <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the
                    industry's standard dummy text ever since.</p>
            </div>
            <div class="col-md-7 ">
                <div class="form-group">
                    <label class="reg_para" for="exampleInputFile">Company Documents *</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label  reg_para   input-contact" for="exampleInputFile">Choose
                                file</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Payment Method --}}
        <h4>Payment Method</h4>
        <hr class="bg-success">
        <div class=" row">
            <div class="col-md-5 ">
                <p class="reg_para">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the
                    industry's standard dummy text ever since.</p>
            </div>
            <div class="col-md-7 ">
                <div class="form-row ">
                    <div class="form-group  col-md-12">
                        <label class="reg_para" for="">Payment Method *</label>
                        <input type="text" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="p_method" require placeholder="Enter Payment Method" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-12">
                        <label class="reg_para" for="">Name On Card *</label>
                        <input type="tel" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="nameOnCard" require placeholder="Enter Name On Card" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-12">
                        <label class="reg_para" for="">Card No *</label>
                        <input type="tel" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="card_no" require placeholder="Enter Card Number" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-6">
                        <label class="reg_para" for="">Expiration (MM/YY) *</label>
                        <input type="text" class="form-control  reg_para input-group input--style-1 input-contact"
                            name="company_name" require placeholder="Enter company Name" required>
                    </div>
                    <div class="form-group  col-md-6  ">
                        <label class="reg_para" for="">CVV Code *</label>
                        <input type="tel" class="form-control reg_para input-group input--style-1 input-contact"
                            name="cvv" require placeholder="Enter CVV Code" required>
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
                <a href="{{ URL('/') }}" class="btn btn-primary btn-sub">Submit</a>
                <a href="{{ URL('Memberships') }}" class="btn  btn-cen">Cancel</a>
            </div>
        </div>
        </form>
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
