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

    @include('user.userLayouts.ProfileHeader')
    <div class="container mt-3 mb-3  border 1px">
        <form action="{{ URL('/Update-Data') }}" method="POST" enctype="multipart/form-data" class="reg_para">
            @csrf
            <input value="{{ $companyData['id'] }}" type="hidden" name="id">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="row ">
                        <div class="col-md-12 ">
                            <h5 class="pb-0 pt-3">General Information</h5>
                            <hr class="bg-success pt-0">
                            <div class="form-row ">
                                <div class="form-group  col-md-12">
                                    <label class="reg_para" for="">Name *</label>
                                    <input type="text" value="{{ $companyData['name'] }}"
                                        class="@error('name') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="name" require placeholder="Enter company Name">
                                    @error('name')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Email *</label>
                                    <input type="email" value="{{ $companyData->company_email }}"
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
                                    <input type="tel" value="{{ $companyData['phone'] }}"
                                        class="@error('phone') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="phone" require placeholder="Enter Phone Number">
                                    @error('phone')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Website *</label>
                                    <input type="text" value="{{ $companyData['company_website'] }}"
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
                                    <input type="text" value="{{ $companyData['description'] }}"
                                        class="@error('description') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="description" require placeholder="Enter Company Description ">
                                    @error('description')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row ">
                                <div class="form-group  col-md-12  ">
                                    <label class="reg_para" for="">Company Founding Year *</label>
                                    <input type="text" value="{{ $companyData['companyfy'] }}"
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
                                        placeholder="Enter Company Address ">{{ $companyData->address }}</textarea>
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
                                        placeholder="Enter Warehouse Address ">{{ $companyData->warehouse }}</textarea>
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
                                    <input type="tel" value="{{ $companyData['vat_id'] }}"
                                        class="@error('vat_id') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="vat_id" require placeholder="Enter VAT ID">
                                    @error('vat_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Tax Id *</label>
                                    <input type="tel" value="{{ $companyData['tax_id'] }}"
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
                                    <input type="tel" value="{{ $companyData['reg_id'] }}"
                                        class="@error('reg_id') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="reg_id" require placeholder="Enter Registration ID">
                                    @error('reg_id')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Court *</label>
                                    <input type="text" value="{{ $companyData['court'] }}"
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
                                    <input type="text" value="{{ $companyData['linkedin'] }}"
                                        class="@error('linkedin') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="linkedin" require placeholder="Enter LinkedIn link ">
                                    @error('linkedin')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Facebook *</label>
                                    <input type="text" value="{{ $companyData['facebook'] }}"
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
                                    <input type="text" value="{{ $companyData['twitter'] }}"
                                        class="@error('twitter') is-invalid @enderror form-control  reg_para input-group input--style-1 input-contact"
                                        name="twitter" require placeholder="Enter Twitter link">
                                    @error('twitter')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group  col-md-6  ">
                                    <label class="reg_para" for="">Instagram *</label>
                                    <input type="text" value="{{ $companyData['insta'] }}"
                                        class="@error('insta') is-invalid @enderror form-control reg_para input-group input--style-1 input-contact"
                                        name="insta" require placeholder="Enter Instagram link">
                                    @error('insta')
                                        <span>{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="ml-2">
                                    <img class=""
                                        src="{{ asset('storage/app/public/post/Memberships/' . $companyData->image) }}"
                                        width="80px" alt="" height="50px">
                                </div>
                                <div class="input-group step">

                                    <div class="custom-file">
                                        <input type="file" name="image" class="custom-file-input "
                                            id="exampleInputFile">
                                        <label class="custom-file-label  reg_para input-contact"
                                            for="exampleInputFile">Upload Company Logo
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mt-2">
                                <div class="input-group step">
                                    <div class="custom-file">
                                        <input type="file" name="file" class="custom-file-input "
                                            id="exampleInputFile1">
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
