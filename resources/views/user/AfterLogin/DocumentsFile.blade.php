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
    <div class="container mt-1">
        <div class="row pb-1 step">
            <div class="form-group ">
                <div class="input-group ">
                    <div class="custom-file ">
                        <input type="file" name="image" class="custom-file-input " id="exampleInputFile">
                        <label class="custom-file-label  reg_para   input-contact" for="exampleInputFile">Choose
                            file</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-2 border 1px mb-2">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                <div class="mt-3"> <span class="">Company-certificate-2021.pdf</span></div>
            </div>
            <div class="col-md-4">

                <div class="card-body">

                    <label name="D_Type">{{ __('Document Type') }}</label>
                    <select name="D_Type" class="form-control reg_para input-group input--style-1 input-contact">
                        <option>ISO 9001</option>
                        <option>ISO 9002</option>
                        <option>ISO 8802</option>
                        <option>ISO 4802</option>
                    </select>
                    @error('D_Type')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-4 mt-4    pt-2 pb-2">
                <a href="" type="submit" class="btn btn-danger step msg_span3 text-light ml-2">
                    <i class="bi bi-archive "></i></a>
                <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light"><i
                        class="bi bi-download"></i></a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                <div class="mt-3"> <span class="">Company-certificate-2021.pdf</span></div>
            </div>
            <div class="col-md-4">

                <div class="card-body">

                    <label name="D_Type">{{ __('Document Type') }}</label>
                    <select name="D_Type" class="form-control reg_para input-group input--style-1 input-contact">
                        <option>ISO 9001</option>
                        <option>ISO 9002</option>
                        <option>ISO 8802</option>
                        <option>ISO 4802</option>
                    </select>
                    @error('D_Type')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-4 mt-4    pt-2 pb-2">
                <a href="" type="submit" class="btn btn-danger step msg_span3 text-light ml-2">
                    <i class="bi bi-archive "></i></a>
                <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light"><i
                        class="bi bi-download"></i></a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                <div class="mt-3"> <span class="">Company-certificate-2021.pdf</span></div>
            </div>
            <div class="col-md-4">

                <div class="card-body">

                    <label name="D_Type">{{ __('Document Type') }}</label>
                    <select name="D_Type" class="form-control reg_para input-group input--style-1 input-contact">
                        <option>ISO 9001</option>
                        <option>ISO 9002</option>
                        <option>ISO 8802</option>
                        <option>ISO 4802</option>
                    </select>
                    @error('D_Type')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-4 mt-4    pt-2 pb-2">
                <a href="" type="submit" class="btn btn-danger step msg_span3 text-light ml-2">
                    <i class="bi bi-archive "></i></a>
                <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light"><i
                        class="bi bi-download"></i></a>
            </div>
        </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                <div class="mt-3"> <span class="">Company-certificate-2021.pdf</span></div>
            </div>
            <div class="col-md-4">

                <div class="card-body">

                    <label name="D_Type">{{ __('Document Type') }}</label>
                    <select name="D_Type" class="form-control reg_para input-group input--style-1 input-contact">
                        <option>ISO 9001</option>
                        <option>ISO 9002</option>
                        <option>ISO 8802</option>
                        <option>ISO 4802</option>
                    </select>
                    @error('D_Type')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-4 mt-4    pt-2 pb-2">
                <a href="" type="submit" class="btn btn-danger step msg_span3 text-light ml-2">
                    <i class="bi bi-archive "></i></a>
                <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light"><i
                        class="bi bi-download"></i></a>
            </div>
        </div>
    </div>
    </div>
    <div class="container border 1px mb-2">
        <div class="row">
            <div class="col-md-4 mt-2">
                <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                <div class="mt-3"> <span class="">Company-certificate-2021.pdf</span></div>
            </div>
            <div class="col-md-4">

                <div class="card-body">

                    <label name="D_Type">{{ __('Document Type') }}</label>
                    <select name="D_Type" class="form-control reg_para input-group input--style-1 input-contact">
                        <option>ISO 9001</option>
                        <option>ISO 9002</option>
                        <option>ISO 8802</option>
                        <option>ISO 4802</option>
                    </select>
                    @error('D_Type')
                        <span>{{ $message }}</span>
                    @enderror
                </div>

            </div>
            <div class="col-md-4 mt-4    pt-2 pb-2">
                <a href="" type="submit" class="btn btn-danger step msg_span3 text-light ml-2">
                    <i class="bi bi-archive "></i></a>
                <a href="" type="submit" class="btn btn-secondary msg_span4 step text-light"><i
                        class="bi bi-download"></i></a>
            </div>
        </div>
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
