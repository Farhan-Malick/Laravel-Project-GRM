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

    <div class="container mb-2 pb-5 pt-2  border 1px">
        <div class="row">
            <div class="col-md-12">
                <h6>Images</h6>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-3">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/img_a.svg" alt="" width="100%" class="mt-2">
            </div>
        </div>
    </div>
    <div class="container mb-2 pb-5 pt-2  border 1px">
        <div class="row">
            <div class="col-md-12">
                <h6>Videos</h6>
                <hr class="bg-success">
            </div>
        </div>
        <div class="row ">
            <div class="col-md-3">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
            </div>
            <div class="col-md-3">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
                <img src="public/assets/images/video.svg" alt="" width="100%" class="mt-2">
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
