<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
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
    {{-- First Section Ends --}}
    <div class="container A_P mt-5 border 1px">
        {{-- COMPANY INFORMATION SECTION --}}
        <div class="row pt-1 addproduct_header">
            <div class="col-12">
                <h6 class="text-light p-3">Add New Product</h6>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pt-4 pl-5 pr-5">
                <h6>Material Information <span class="step">Step-01</span></h6>
                <hr class="bg-success">
            </div>
            <div class="col-md-12 pl-5 pr-5">
                <form action="" method="" id="">
                    <div class="form-row ">
                        <div class="form-group  col-md-12  ">
                            <label class="reg_para" for="">Product Name :</label>
                            <input type="text" class="form-control reg_para " name="p_name" require
                                placeholder="Enter Product Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="reg_para" for="exampleInputFile">Picture :</label>
                        <div class="">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label  reg_para " for="exampleInputFile">Choose
                                    file</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="reg_para" for="">Description :</label>
                        <div class="">
                            <div class="">
                                <textarea class="form-control" name="" id="" cols="30" rows="6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="form-row ">
                        <div class="form-group  col-md-6 ">
                            <label name="category">{{ __('Category') }}</label>
                            <select name="category" class="form-control reg_para ">
                                <option>PVC</option>
                                <option>MVC</option>
                                <option>Hybrid</option>
                                <option>Others</option>
                            </select>
                            @error('category')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group  col-md-6 ">
                            <label name="condition">{{ __('Condition') }}</label>
                            <select name="condition" class="form-control reg_para ">
                                <option>Loose</option>
                                <option>Win</option>
                            </select>
                            @error('condition')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 pt-4 pl-5 pr-5">
                <h6>Availabality & Pricing<span class="step">Step-02</span></h6>
                <hr class="bg-success">
            </div>
            <div class="col-md-12 pl-5 pr-5">
                <div class="form-row ">
                    <div class="form-group  col-md-4  ">
                        <label class="reg_para" for="">Quantity Available :</label>
                        <input type="text" class="form-control reg_para" name="gender" require placeholder="15"
                            required>
                    </div>
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">Unit (Weight) :</label>
                        <select name="unit_weight" class="form-control reg_para ">
                            <option>MT</option>
                            <option>MVC</option>
                            <option>Hybrid</option>
                            <option>Others</option>
                        </select>
                        @error('unit_weight')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">Supply Type :</label>
                        <select name="unit_weight" class="form-control reg_para ">
                            <option>Ongoing</option>
                            <option>MVC</option>
                            <option>Hybrid</option>
                            <option>Others</option>
                        </select>
                        @error('unit_weight')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group  col-md-2  ">
                        <label class="reg_para" for="">Currency :</label>
                        <input type="text" class="form-control reg_para" name="gender" require
                            placeholder="Enter Country" required>
                    </div>
                    <div class="form-group   col-md-5  ">
                        <label class="reg_para" for="">Price :</label>
                        <input type="text" class="form-control reg_para" name="city" require placeholder="Enter City"
                            required>
                    </div>
                    <div class="form-group   col-md-5  ">
                        <label class="reg_para" for="">Pricing Terms :</label>
                        <select name="unit_weight" class="form-control reg_para ">
                            <option>FOB</option>
                            <option>MVC</option>
                            <option>Hybrid</option>
                            <option>Others</option>
                        </select>
                        @error('unit_weight')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pt-4 pl-5 pr-5">
                <h6>Location<span class="step">Step-03</span></h6>
                <hr class="bg-success">
            </div>
            <div class="col-md-12 pl-5 pr-5">
                <div class="form-row ">
                    <div class="form-group  col-md-12  ">
                        <label class="reg_para" for="">Collection Address :</label>
                        <input type="text" class="form-control reg_para " name="col_address" require
                            placeholder="Enter Collection Address" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">Country :</label>
                        <select name="country" class="form-control reg_para ">
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
                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">City :</label>
                        <select name="city" class="form-control reg_para ">
                            <option>Lahore</option>
                            <option>Karachi</option>
                            <option>Islamabad</option>
                            <option>Multan</option>
                        </select>
                        @error('city')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group   col-md-4  ">
                        <label class="reg_para" for="">Zip Code :</label>
                        <input type="tel" class="form-control reg_para " name="zip_code" require
                            placeholder="Enter Zip-Code" required>
                    </div>
                </div>
                <div class="form-row ">
                    <div class="form-group   col-md-12 ">
                        <label class="reg_para" for="">Listing Options :</label>
                        <select name="country2" class="form-control reg_para ">
                            <option>All Countries</option>
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
                        @error('city')
                            <span>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="form-group   col-md-12  ">
                        <label class="reg_para" for="">Payment Terms :</label>
                        <input type="text" class="form-control reg_para " name="p_terms" require
                            placeholder="Enter your payment terms here" required>
                    </div>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="form-check col-md-12 m-2 text-center">
                <a href="{{ URL('/') }}" class="btn btn-success addproduct_btn">Done</a>
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
