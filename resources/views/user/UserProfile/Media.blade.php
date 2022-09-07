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
    <div class="container mt-3">
        @if (Session::has('imgvideo'))
            <div class="container col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                {{ session('imgvideo') }}</div>
        @endif
    </div>
    <form action="{{ URL('/Media') }}" method="POST" enctype="multipart/form-data" class="reg_para">
        @csrf
        <div class="container mb-2 pb-5 pt-2  border 1px">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="trade2">Images </h4>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file border-left 1px">
                                <input type="file" name="file" class="custom-file-input " id="exampleInputFile"
                                    required>
                                <label class="custom-file-label  reg_para input-contact mb-2 "
                                    for="exampleInputFile">Upload
                                    image</label>
                            </div>
                        </div>
                    </div>

                    <hr class="bg-success">
                </div>
            </div>


            <div class="row">
                @foreach ($media as $medi)
                    <div class="col-md-3  d-flex ">
                        <div class="" style="float: left">
                            <img src="{{ asset('storage/app/public/post/' . $medi->file) }}" height="200px"
                                width="100%" class="mt-2 mb-2" />
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="container mb-2 pb-5 pt-2  border 1px">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="trade2">Videos </h4>
                        </div>
                        <div class="col-md-6">
                            <div class="custom-file border-left 1px">
                                <input type="file" name="video" class="custom-file-input " id="exampleInputFile"
                                    required>
                                <label class="custom-file-label  reg_para input-contact" for="exampleInputFile">Upload
                                    Video</label>
                            </div>
                        </div>
                    </div>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row ">
                @foreach ($media as $medi)
                    <div class="col-md-2  d-flex ">
                        <div class="" style="float: left">
                            <video src="{{ asset('storage/app/public/post/' . $medi->video) }}" type="video/webm"
                                height="300px" width="100%"></video>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr class="bg-success">
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" class="btn btn-success reg_para  input-contact" value="Upload"
                        style="float: right; width:20%">
                </div>
            </div>

        </div>

        </div>
    </form>
    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
