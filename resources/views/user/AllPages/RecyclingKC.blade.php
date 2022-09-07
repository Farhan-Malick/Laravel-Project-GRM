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
                {{-- <h4 class="text-dark pt-2">KNOWLEDGE CENTRE</h4> --}}
                <h4 class="text-dark pt-2">{{ $RecyclingKC->heading }}</h4>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">{{ $RecyclingKC->p1 }}
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">{{ $RecyclingKC->p2 }}
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">{{ $RecyclingKC->p3 }}
                </p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <p class="reg_para">{{ $RecyclingKC->p4 }}
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
