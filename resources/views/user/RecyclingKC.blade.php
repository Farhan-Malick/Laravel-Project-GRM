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

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center">RECYCLING KNOWLEDGE CENTRE</h3>
            </div>
        </div>
    </div>
    <div class="container  mb-5 border 1px">

        <div class="row">
            <div class="col-md-12 mt-2 ">
                <h4 class="text-dark pt-2">KNOWLEDGE CENTRE</h4>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">The vision of our company is to bring all waste management and recycling
                    industry stakeholders together on one platform.
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">To do this, we will launch a knowledge centre program that educates people
                    about the many opportunities for reducing their environmental footprint through these practices as
                    well as other innovative solutions for better sustainable future!
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">The future of recycling is in our hands! Join us on this journey to make it
                    sustainable <br> <span> for the next generation.</span>
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">Helping to create a sustainable future by connecting the recycling industry.
                </p>
                <hr>
                <h5 class="text-center pb-2">Create your Store today! </h5>

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
