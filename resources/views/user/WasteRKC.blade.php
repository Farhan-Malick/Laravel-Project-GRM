<!DOCTYPE html>
<html lang="en">

@include('user.userLayouts.HeadLinks')

<body>
    {{-- First Section --}}
    @include('user.userLayouts.Navbar')
    {{-- First Section Ends --}}
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
    <div class="container">
        <h5 class="mt-5">Select Location for Waste Moving Regulation</h5>
        <div class="row">
            <div class="form-group   col-md-6  ">
                <select name="country" class="form-control reg_para ">
                    <option>From :</option>
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
            <div class="form-group   col-md-6  ">
                <select name="country" class="form-control reg_para ">
                    <option>To :</option>
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
        </div>
        <div class="container mb-5 border 1px">
            <div class="row">
                <div class="col-md-12 mt-2">
                    <h4>Waste Regulation</h4>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">We all know how complicated and ever-changing the regulations can be in
                        Waste Management and Recycling industry. </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">That's why we're proud to offer a solution for you - an easy guide that
                        will help keep your business up with Waste Regulations by helping ensure compliance when
                        importing or exporting waste from one country into another!
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">This is not just something exclusive; it’s been created as World’s First,
                        which means there aren't any online platform or companies out there doing what ours does: making
                        sure material movements meets global regulation through research & development efforts like
                        these ones."
                    </p>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="reg_para">Simply choose the type of material, origin and destination in the search
                        box and get the results.
                    </p>
                    <hr>
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
