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
        @if (Session::has('Docs'))
            <div class="container col-sm-12 text-dark alert alert-success" style="text-align: center; ">
                {{ session('Docs') }}</div>
        @endif
    </div>
    <form action="{{ URL('/docs') }}" method="POST" enctype="multipart/form-data" class="reg_para">
        @csrf
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="input-group step" style="width:50%">
                        <div class="custom-file">
                            <input type="file" name="file" class="custom-file-input " id="exampleInputFile" required>
                            <label class="custom-file-label  reg_para input-contact" for="exampleInputFile">Choose
                                file</label>
                        </div>
                        <input type="submit" class="btn btn-success mt-1 reg_para input-contact" value="Upload">
                    </div>
                </div>
            </div>
        </div>
        @foreach ($data as $data)
            <div class="container mt-2 border 1px mb-2">
                <div class="row">
                    <div class="col-md-4 mt-4">
                        <div class="img_div_VP mr-5 "><img src="public/assets/images/pdf.svg" alt=""></div>
                        <div class="mt-3"> <span class="">Company-<b>{{ $data->file }}</b>
                                <br> {{ $data->created_at }}</span>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card-body">
                            <label name="D_Type">{{ __('Document Type') }}</label>
                            <select name="D_Type"
                                class="form-control reg_para input-group input--style-1 input-contact">
                                <option>PDF</option>
                            </select>
                            @error('D_Type')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4 mt-4    pt-2 pb-2">
                        <a href="{{ URL('delete/' . $data->id) }}"
                            class="btn btn-danger reg_para step msg_span3 text-light ml-2">
                            <i class="bi bi-archive mr-2"></i>Delete</a>
                        <a href="{{ URL('storage/app/public/post', $data->file) }}"
                            class="btn btn-secondary reg_para msg_span4 step text-light"><i
                                class="bi bi-download mr-2"></i>Download</a>
                    </div>
                </div>
            </div>
        @endforeach
    </form>

    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
