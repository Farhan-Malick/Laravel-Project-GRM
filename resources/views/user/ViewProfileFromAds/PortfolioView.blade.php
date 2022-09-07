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

    {{-- @include('user.userLayouts.ProfileHeader') --}}
    <div class="container border 1px reg_para">
        <div class="row pb-1">
            <div class="col-md-5">
                <div class="">
                    <img src="{{ url('public/assets/images/PROFILE2.jpg') }}" class="img_div_pro " alt="">
                    @if ($approval)
                        <h5 class="name_padding m-0">{{ $approval->media->name }}
                            {{ $approval->media->lname }} <a href="#" type="submit"
                                class="pre btn btn-success">PREMIUM</a>
                        </h5>
                    @else
                        <h5 class="name_padding m-0"> This user has No Media<a href="#" type="submit"
                                class="pre btn btn-success ml-3">PREMIUM</a>
                        </h5>
                    @endif
                    <p class="reg_para p-0 m-0"><i class="bi bi-geo-alt-fill text-dark mr-1"></i>Lahore, Pakistan</p>
                </div>
            </div>
            <div class="col-md-7 mb-2 border-left 1px pt-3">
                <h6 class="p-0 m-0">Business Type</h6>
                <span class="reg_para p-0 m-0 text-secondary">Seller</span>

                <a href="{{ URL('/chatify', $approval->user_id) }}" type="submit"
                    class="btn btn-secondary msg_span2 reg_para text-white">
                    <i class="bi bi-chat mr-2"></i>Message</a>

                <h6 class="p-0 m-0">Status</h6>
                <span class="reg_para p-0 m-0 text-secondary">Active</span>
            </div>
            <div class="navheader w-100  text-center">
                <div class="container ">
                    {{-- navbar starts --}}
                    <nav class="navbar navbar-expand-lg navbar-dark">
                        <a class="navbar-brand d-flex" href="{{ URL('/') }}">
                            {{-- <img src="public/assets/images/GRMLogoFinal2.png" class="logo" alt=""> --}}
                            <div class=" ml-2">
                                <h6 class="pt-2 text-white">GLOBAL RECYCLING MARKETING</h6>
                            </div>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent2">
                            <ul class="navbar-nav">
                                @if ($approval)
                                    <li class="nav-item active ">

                                        <a class="nav-link"
                                            href="{{ route('Profile/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-building mr-2"></i>Company
                                            Profile
                                            <span class="sr-only">(current)</span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Offers/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-hand-thumbs-up mr-2"></i>Offers
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Request/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-arrow-down-left-square mr-2"></i>Request <span
                                                class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Documents/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-file-earmark-plus mr-2"></i>Documents
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Portfolio/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-aspect-ratio mr-2"></i>Portfolio
                                            <span class="sr-only"></span></a>

                                    </li>
                                    <li class="nav-item ">

                                        <a class="nav-link"
                                            href="{{ route('Tenders/', ['id' => $approval->media->id]) }}"><i
                                                class="bi bi-file-earmark-spreadsheet-fill mr-2"></i>Tenders <span
                                                class="sr-only"></span></a>

                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                    {{-- navbarEnds --}}
                </div>
            </div>
        </div>
    </div>
    @if ($allData)
        <div class="container mb-2 pb-5 pt-2  border 1px">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="trade2">Images </h4>
                        </div>
                    </div>

                    <hr class="bg-success">
                </div>
            </div>
            <div class="row">
                @foreach ($allData as $medi)
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
                    </div>
                    <hr class="bg-success">
                </div>
            </div>
            <div class="row ">
                @foreach ($allData as $medi)
                    <div class="col-md-2  d-flex ">
                        <div class="" style="float: left">
                            <video src="{{ asset('storage/app/public/post/' . $medi->video) }}" type="video/webm"
                                height="300px" width="100%"></video>
                        </div>
                    </div>
                @endforeach
            </div>
            <hr class="bg-success">

        </div>
    @else
        <h3 class="text-center">No Media Found</h3>
    @endif

    {{-- Footer Start --}}
    @include('user.userLayouts.Footer')
    {{-- Footer Start --}}

    {{-- scripting Link --}}
    @include('user.userLayouts.ScriptingLinks')
    {{-- scripting Link Ends --}}
</body>

</html>
