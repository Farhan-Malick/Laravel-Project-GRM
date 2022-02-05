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

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">WHY Use Global Recycling Market</h3>
            </div>
        </div>
    </div>
    <div class="container  mb-5 border 1px">

        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h4 class="text-dark pt-2">Why work with us?</h4>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">We at Global Recycling Market believe that recycling is not just about making
                    sure things are disposed of properly but also entails exploring new opportunities for economic
                    growth.
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">As such, our Platform provides complete solutions to help the industry grow-
                    whether you're looking into trading recyclables or any other aspect!
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">Our solutions are Trade with your own Store, Industry Services, GRM Store,
                    Regulation Check and Knowledge Centre.
                </p>

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
